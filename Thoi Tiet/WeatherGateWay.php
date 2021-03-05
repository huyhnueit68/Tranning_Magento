<?php

class WeatherGateWay {

    protected $token;

    public function __construct(
        $token
    )
    {
        $this->_token = $token;
    }

    public function getWeatherByCityName($cityName)
    {
        $json = file_get_contents('city.list.json');   
    }

    public function getWeatherByCityId($cityId)
    {
        $apiKey = $this->_token;
        $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);

        curl_close($ch);
        $data = json_decode($response);

        return $data;
    }
}