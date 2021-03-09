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
        $url = $this->_url; //get url
        $ch = curl_init(); //init curl
        curl_setopt($ch, CURLOPT_URL, $url); //set
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
        preg_match_all('#<p[^>]*>(.*?)</p>#', $html, $matches);
        return $matches;
    }

    /**
     * @return mixed
     */
    public function getTimeUrl()
    {
        $html = $this->getHTMLFormUrl();
        $matches = array();
        preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])\/(0[1-9]|1[0-2])\/[0-9]{4}$/gm",$html, $matches);
        return $matches;
    }
}