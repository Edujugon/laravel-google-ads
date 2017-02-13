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
        $query = $this->createQuery();

        $this->data = $this->reportDownloader->downloadReportWithAwql(
            $query, $this->format);
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


    /**
     * MAGIC METHODS
     */

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