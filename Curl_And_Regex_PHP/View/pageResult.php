<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tranning Magento</title>
    <style>
        .col-1{
            border-radius: 10px;
            background-color: #DAEEF0;
            border-color: #2E9AFE;
            border-style: solid;
            margin: auto;
            margin-top: 10%;
        }
        .col-2{
            background-color: #2E9AFE;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="col-1">
    <div class="col-2">
        <h3 id="lbt-header">Tranning Curl and Regex</h3>
    </div>
    <?php
        if(isset($title)){
            echo "<h1>".htmlspecialchars($title)."</h1>";
        }
        if(isset($time)){
            echo "<h1>Time Page: ".$time[1]."</h1>";
        }
        if(isset($content)){
            foreach ($content as $item){
                echo htmlspecialchars($item);
            }
        }
    ?>
</div>
</body>
</html>