<?php
include_once("../API/WeatherRepositoryInterface.php");
    try {
        if(isset($_POST['submitWeather']) && isset($_POST['l_on']) && isset($_POST['l_at'])){
            if(is_numeric($_POST['l_on']) && is_numeric($_POST['l_at'])){
                $weatherAPI = new WeatherRepository('412610a74c218e9e763db58706e65210');
                echo "huy5";
                $data = $weatherAPI->getWeatherByLocal($_POST['l_on'], $_POST['l_at']);
                include_once("../View/weather.php");
            } else {
                $data = null;
            }
        } else {
            $data = null;
        }
    } catch (\Exception $exception){
        echo $exception;
    }
