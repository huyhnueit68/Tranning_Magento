<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tranning Magento</title>
    <style>
        .col-1{
            width: 30%;
            height: 80%;
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
        #formLoad{
            text-align: center;
        }
        #submit-form{
            background-color: #2E9AFE;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            font-size: 16px;
            border-radius: 10px;
            margin-left: 7%;
            margin-bottom: 10%;
            text-align: center;
        }
        #input2{
            margin-left: 10px;
        }
    </style>
</head>
<body>
<div class="col-1">
    <div class="col-2">
        <h3 id="lbt-header">Tranning Curl and Regex</h3>
    </div>
    <form action="./Controller/ctrCurl.php" method="post" id="formLoad">
        <br><br>URL: <input type="text" name="url" id="input2">
        <br><br><input type="submit" id="submit-form" name="submitUrl">
        <p>Ex: https://vietnamnet.vn/vn/suc-khoe/viet-nam-tiem-vaccine-covid-19-4-nhom-phan-ung-sau-tiem-can-biet-717715.html</p>
    </form>
</div>
</body>
</html>