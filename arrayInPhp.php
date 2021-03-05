<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tranning php</title>
</head>
<body>
    <?php
        $a1 = [
            "a" => "red",
            "b" => "green",
            "c" => "blue",
            "d" => "yellow"
        ];

        $a2 = [
            "a" => "red",
            "b" => "green",
            "c" => "blue",
        ];

        $result = [];
        foreach ($a1 as $key => $value) {
            foreach($a2 as $key2 => $value2) {
                if($value == $value2){
                    $result[$key] = $value;
                }
            }
        }

        echo "Y a: <br>";
        print_r($result);


        $age = ["Peter"=>"35","Ben"=>"37","Joe"=>"43"];

        echo "<br>Y b: <br><br>";
        $result2 = [];
        foreach ($age as $key => $value){
            $temp2 = "";
            for($i = 0 ; $i <= strlen($key) ; $i++){
                if(ord($key[$i]) >= 97 && ord($key[$i]) <= 122){
                    $temp2 = $temp2.chr(ord($key[$i])-32);
                } else {
                    $temp2 = $temp2.$key[$i];
                }
            }
            $result2[$key] = $temp2;
        }
        print_r($result2);
    ?>
</body>
</html>