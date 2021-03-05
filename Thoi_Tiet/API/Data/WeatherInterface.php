<?php

/**
 * Interface WeatherInterface
 */
interface WeatherInterface
{
    /**
     * @param $cityId
     * @return mixed
     */
    public function getWeatherByCityId($cityId);

    /**
     * @param $cityName
     * @return mixed
     */
    public function getWeatherByCityName($cityName);

    /**
     * @param $l_on
     * @param $l_at
     * @return mixed
     */
    public function getWeatherByLocal($l_on, $l_at);
}