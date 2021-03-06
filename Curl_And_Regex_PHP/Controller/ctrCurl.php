<?php
    /**
     * TO DO:
     */
    include_once("../Model/Curl.php");
    $infoUrl = new Curl($_POST['url']);
    $title = $infoUrl->getTitleUrl()[1];
    $content = $infoUrl->getContentUrl();
    $time = $infoUrl->getTimeUrl();
    include_once("../View/pageResult.php");