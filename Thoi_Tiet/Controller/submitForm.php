<?php
include_once("../Model/WeatherRepository.php");
    try {
        $notification = "";
        if(isset($_POST['submitWeather']) && isset($_POST['l_on']) && isset($_POST['l_at'])){
            if(is_numeric($_POST['l_on']) && is_numeric($_POST['l_at'])){
                $weatherAPI = new WeatherRepository('412610a74c218e9e763db58706e65210');
                $data = $weatherAPI->getWeatherByLocal($_POST['l_on'], $_POST['l_at']);
                include_once("../view/weather.php");
            } else {
                $notification = "Xin moi nhap du lieu vao la mot so";
                $data = null;
                include_once("../view/weather.php");
            }
        } else {
            $notification = "Xin moi nhap du lieu vao la mot so";
            $data = null;
            include_once("../view/weather.php");
        }
    } catch (\Exception $exception){
        echo $exception;
    }
