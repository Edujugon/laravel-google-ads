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
use Google\AdsApi\AdWords\Reporting\v201609\ReportDownloader;
use Google\AdsApi\AdWords\v201609\cm\ApiException;

class Report
{

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
        $session = $session ? $session : (new AdwordsSession())->oAuth()->build();

        $this->reportDownloader = new ReportDownloader($session);

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
     * Set the during clause.
     *
     * @param $dates
     * @return $this
     * @throws \Edujugon\GoogleAds\Exceptions\Report
     */
    public function during($dates)
    {
        if(func_num_args() != 2)
            throw new \Edujugon\GoogleAds\Exceptions\Report('During clause only accepts 2 parameters. if dates, the format should be as follow: 20170112,20171020');

        $this->during = func_get_args();

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
        $this->where = $condition;

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
     * Get the report as an object
     *
     * @return \SimpleXMLElement
     */
    public function getAsObj()
    {
        $this->format(Format::get('xml'));

        $this->run();

        return simplexml_load_string($this->data->getAsString());
    }

    /**
     *
     * @return mixed
     */
    public function getAsString()
    {
        $this->run();

        return $this->data->getAsString();
    }

    /**
     * @return mixed
     */
    public function getStream()
    {
        $this->run();

        return $this->data->getStream();
    }

    /**
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
    private function except($excepts)
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
        return ReportTypes::list();
    }

    /**
     * @return string
     */
    public function getFields()
    {
        return $this->fields;
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