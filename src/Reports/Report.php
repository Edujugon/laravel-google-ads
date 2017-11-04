<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 10/2/17
 * Time: 10:43
 */

namespace Edujugon\GoogleAds\Reports;


use Edujugon\GoogleAds\Session\AdwordsSession;
use Google\AdsApi\AdWords\Reporting\v201710\ReportDownloader;
use Google\AdsApi\AdWords\v201710\cm\ApiException;

class Report
{

    protected $session;
    /**
     * @var ReportDownloader
     */
    protected $reportDownloader;
    /**
     * @var
     */
    protected $format;

    /**
     * Report Data
     * @var
     */
    protected $data;

    /**
     * @var
     */
    protected $query = '';

    /**
     * @var string
     */
    protected $fields = [];

    /**
     * During clause
     * @var string
     */
    protected $during = [];

    /**
     * Where Condition
     *
     * @var string
     */
    protected $where='';

    /**
     * @var string
     */
    protected $type = '';


    /**
     * @var bool
     */
    protected $magicSelect = false;

    /**
     * Reports constructor.
     * @param null $session
     */
    function __construct($session = null)
    {
        $this->session = $session ? $session : (new AdwordsSession())->oAuth()->build();

        $this->reportDownloader = new ReportDownloader($this->session);

        //Set the default format.
        $this->format = Format::get('csv');
    }

    /**
     * Set the format for the report.
     * @param $format
     * @return $this
     */
    public function format($format)
    {
        if(Format::exist($format))
            $this->format = Format::get($format);
        else
            Format::invalidType();

        return $this;
    }

    /**
     * Set the fields to retrieve
     *
     * @param $fields
     * @return $this
     */
    public function select($fields)
    {
        $this->fields = is_array($fields) ? $fields : func_get_args();

        return $this;
    }

    /**
     * Set the report type
     *
     * @param $reportType
     * @return $this
     */
    public function from($reportType)
    {
        if(!ReportTypes::exist($reportType))
            ReportTypes::invalidType();

        $this->type = ReportTypes::get($reportType);

        return $this;
    }

    /**
     * Set the starting and ending dates for the report.
     *
     * dates format 'Ymd' => e.g. 20170112,20171020
     *
     * @param $starting
     * @param $ending
     * @return $this
     * @throws \Edujugon\GoogleAds\Exceptions\Report
     */
    public function during($starting,$ending)
    {
        if(! is_numeric($starting) || ! is_numeric($ending))
            throw new \Edujugon\GoogleAds\Exceptions\Report('During clause only accepts the following date format: "Ymd" => e.g. 20170112');

        $this->during = [$starting,$ending];

        return $this;
    }

    /**
     * Set where condition
     *
     * @param $condition
     * @return $this
     */
    public function where($condition)
    {
        $this->where = ! $this->where ? $condition : $this->where . ' and ' . $condition;

        return $this;
    }

    /**
     * Mark magicSelect as true.
     *
     * @return $this
     */
    public function magicSelect()
    {
      $this->magicSelect = true;

      return $this;
    }

    /**
     * Get the report as a SimpleXMLObj
     *
     * @return \SimpleXMLElement
     */
    public function getAsSimpleXMLObj()
    {
        $this->format(Format::get('xml'));

        $this->run();

        return simplexml_load_string($this->data->getAsString());
    }

    /**
     * Get the report as an object
     *
     * @return \Edujugon\GoogleAds\Reports\MyReport
     */
    public function getAsObj()
    {
        $this->format(Format::get('xml'));

        $this->run();

        return (new MyReport(simplexml_load_string($this->data->getAsString())));
    }

    /**
     * Get report as string
     * @return string
     */
    public function getAsString()
    {
        $this->run();

        return $this->data->getAsString();
    }

    /**
     *  Get report as stream
     * @return Stream
     */
    public function getStream()
    {
        $this->run();

        return $this->data->getStream();
    }

    /**
     * Save the report in a file.
     * @param $filePath
     * @param string $format
     * @return bool
     */
    public function saveToFile($filePath,$format = 'csvforexcel')
    {
        $this->format(Format::get($format));
        $this->run();

        $this->data->saveToFile($filePath);

        return true;
    }

    /**
     * Run the AWQL
     */
    private function run()
    {
        if($this->magicSelect){
            $this->selectAllFields();
            $this->magicRun();
        }

        $query = $this->createQuery();

        $this->data = $this->reportDownloader->downloadReportWithAwql(
            $query, $this->format);

    }

    /**
     * Magic Run the AWQL
     *
     * Will try to download the report and if fails,
     * It pulls out the conflicted field and try again the download.
     */
    private function magicRun()
    {
        $query = $this->createQuery();

        try{
            $this->data = $this->reportDownloader->downloadReportWithAwql(
                $query, $this->format);
        }catch(ApiException $e)
        {
            $field = $e->getErrors()[0]->getFieldPath();

            if(!empty($field)){
                $this->except($field);
                $this->magicRun();
            }else
                var_dump($e->getMessage());
        }

    }

    /**
     * Set all fields from report type
     * @return $this
     */
    private function selectAllFields()
    {
        $this->fields = (new Fields())->of($this->type)->asList();

        return $this;
    }

    /**
     * Pull fields out of fields list.
     *
     * @param $excepts
     * @return $this
     */
    public function except($excepts)
    {
        $excepts = is_array($excepts) ? $excepts : func_get_args();

        $this->fields = array_filter($this->fields,function($field) use($excepts){
            return !in_array($field,$excepts);
        });

        return $this;
    }

    /**
     * @return string
     */
    private function createQuery()
    {
        $query = '';
        if(!empty($this->fields))
            $query = 'SELECT ' . $this->querify($this->fields);
        if(!empty($this->type))
            $query .= ' FROM ' . $this->type;
        if(!empty($this->where))
            $query .= ' WHERE ' . $this->where;
        if(!empty($this->during))
            $query .= ' DURING ' . $this->querify($this->during);

        $this->query = $query;

        return $query;
    }

    /**
     * @param array $data
     * @return string
     */
    private function querify(array $data)
    {
        return implode(',',$data);
    }


    //////////////////////
    // GETTERS
    /////////////////////

    /**
     * @return array
     */
    public function getTypes()
    {
        return ReportTypes::getList();
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return (new Fields($this->session))->of($this->type)->asList();
    }

    /**
     * Get a list of the report formats.
     *
     * @return array
     */
    public function getFormats()
    {
        return Format::getList();
    }

    /**
     * @param $name
     * @return
     */
    function __get($name)
    {
        if(property_exists(__CLASS__,$name))
            return $this->$name;
    }
}