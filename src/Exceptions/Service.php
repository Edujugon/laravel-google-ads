<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 13/2/17
 * Time: 17:24
 */

namespace Edujugon\GoogleAds\Exceptions;


use Exception;

class Service extends \Exception
{
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}