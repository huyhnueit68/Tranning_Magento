<?php

/**
 * Class controllerCurl
 */
class controllerCurl{

    /**
     * @var
     */
    private $_url;

    /**
     * controllerCurl constructor.
     * @param $url
     */
    public function __construct(
        $url
    ) {
        $this->_url = $url;
    }

    /**
     * @return mixed
     */
    public function init()
    {
        $init = curl_init();
        curl_setopt($init, CURLOPT_URL, $this->_url);
        curl_exec($init);
        curl_close($init);
    }

    /**
     * @return bool
     */
    public function getTitelUrl()
    {
        if($this->getContentUrl()){
            return false;
        } else {
            $url = $this->_url;
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HEADER, true);    // lay header
            curl_setopt($ch, CURLOPT_NOBODY, true);    // khong lay phan body
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch, CURLOPT_TIMEOUT,10);
            $output = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            echo 'HTTP code: ' . $httpcode;
            curl_close($ch);
        }
    }

    /**
     * @param $url
     * @param string $useragent
     * @param bool $headers
     * @param bool $follow_redirects
     * @param bool $debug
     * @return mixed
     */
    public function getContentUrl()
    {
        $url = $this->_url;
        if(!$url || !is_string($url) || ! preg_match('/^http(s)?:\/\/[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(\/.*)?$/i', $url)){
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getDateTimeUrl()
    {
        return $this->_url;
    }


    /**
     * action get info
     */
}

$infoUrl = new controllerCurl($_POST['url']);
print_r($infoUrl->getTitelUrl());
