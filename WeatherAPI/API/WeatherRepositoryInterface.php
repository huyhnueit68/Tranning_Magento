<?php
include_once("Data/WeatherInterface.php");

/**
 * Interface WeatherRepositoryInterface
 */
interface WeatherRepositoryInterface
{
    /**
     * @param WeatherInterface $weatherInterface
     * @return mixed
     */
    public function get(
        WeatherInterface $weatherInterface
    );
}