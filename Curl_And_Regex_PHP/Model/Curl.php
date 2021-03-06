<?php

/**
 * Class controllerCurl
 */
class Curl{

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
        $output = $this->getHTMLFormUrl();
        $matches = array();
        preg_match("/<title>(.*)<\/title>/is", $output, $matches);
        return $matches;
    }

    /**
     * @return bool|string
     */
    public function getHTMLFormUrl()
    {
        header('content-type:text/plain');
        $url = $this->_url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    /**
     * @return mixed
     */
    public function getContentUrl()
    {
        $html = $this->getHTMLFormUrl();
        $matches = array();
        preg_match_all('#<div[^>]*>(.*?)</div>#', $html, $matches);
        return $matches[1];
    }

    /**
     * @return mixed
     */
    public function getTimeUrl()
    {
        $html = $this->getHTMLFormUrl();
        $matches = array();
        preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-[0-9]{4}$/",$html, $matches);
        return $matches;
    }
}