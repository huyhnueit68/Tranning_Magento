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
     * @return bool|mixed|null
     */
    public function getTitleUrl()
    {
        if(!$this->getContentUrl()){
            return false;
        } else {
            $page = file_get_contents($this->_url);
            return preg_match('/<title[^>]*>(.*?)<\/title>/ims', $page, $match) ? $match[1] : null;
        }
    }

    /**
     * @return mixed
     */
    public function getContentUrl()
    {
        $url = $this->_url;
        if(!$url || !is_string($url) || ! preg_match('/^http(s)?:\/\/[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(\/.*)?$/i', $url)){
            return false;
        }
        return true;
    }

    /**
     * @return mixed
     */
    public function getDateTimeUrl()
    {
        return $this->_url;
    }


}

$infoUrl = new controllerCurl($_POST['url']);
print_r($infoUrl->getTitleUrl());
