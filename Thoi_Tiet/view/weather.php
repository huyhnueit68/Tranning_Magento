<!doctype html>
<html>
<head>
    <title>Forecast Weather using OpenWeatherMap with PHP</title>
    <style>
        body {
            font-family: Arial;
            font-size: 0.95em;
            color: #929292;
        }
        .report-container {
            border: #E0E0E0 1px solid;
            padding: 20px 40px 40px 40px;
            border-radius: 2px;
            width: 550px;
            margin: 0 auto;
        }
        .weather-icon {
            vertical-align: middle;
            margin-right: 20px;
        }
        .weather-forecast {
            color: #212121;
            font-size: 1.2em;
            font-weight: bold;
            margin: 20px 0px;
        }
        span.min-temperature {
            margin-left: 15px;
            color: #929292;
        }
        .time {
            line-height: 25px;
        }
    </style>
</head>
<body>
<?php
    $currentTime = time();
?>
<div class="report-container">
    <form action="../Controller/submitForm.php" method="POST">
        Kinh Do: <input type="text" name="l_on">
        Vi Do: <input type="text" name="l_at">
        <input type="submit" name="submitWeather">
    </form>
    <?php
        if(isset($data)){
            if ($data){?>
                <h2><?php echo $data->name; ?> Weather Status</h2>
                <div class="time">
                    <div><?php echo date("l g:i a", $currentTime); ?></div>
                    <div><?php echo date("jS F, Y",$currentTime); ?></div>
                    <div><?php echo ucwords($data->weather[0]->description); ?></div>
                </div>
                <div class="weather-forecast">
                    <img    src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                            class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;C<span
                            class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
                </div>
                <div class="time">
                    <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
                    <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
                </div>
                <?php
            }
        }
        if($notification == 0){
            echo "<br>Sorry He Thong Chua Kip Update Local Nay";
        }
        if($notification){
            echo "<br>".$notification;
        }
    ?>
</div>


</body>
</html>