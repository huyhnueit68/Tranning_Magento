<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(function () {
        var numberShow = 3;
        $(".Container").slice(0, numberShow).show();
        $("#loadMore").on('click', function (e) {
            e.preventDefault();
            $(".Container").slice(0, numberShow + 1).slideDown();
                    numberShow = numberShow + 3;
        })
        $("input").on('click', function(){
            var idPlus = event.target.id;
            $('#' + idPlus).parents(".Container").find(".content").slideDown();
        })
    });

</script>
<?php
    $content = [
        "Who do you live with?" => [
            "I live with my wife and children",
            "I live with my parents",
            "I live with my sister"
        ],
        "What time do you get up?" => [
            "At 5.30am.",
            "At 6.00am.",
            "At 7.30am.",
            "At 9.00am.",
        ],
        "When do you do morning exercises?" => [
            "At 5am",
            "At 6am",
            "Nerver"
        ],
        " Where do you study?" => [
            "Ha Noi National University Of Education",
            "Hanoi University of Science and Technology",
            "Foreign Trade University"
        ],
        "What’s your hobby?" => [
            "Football",
            "Reading",
            "Coding"
        ],
        "What’s your favorite food?" => [
            "Spaghetti",
            "Banh Chung",
            "French fries"
        ]
    ];
?>
<style>
    body {
        background-color: #f6f6f6;
        width: 60%;
        margin: 10% auto;
        color: #444;
    }
    div {
        padding: 5px;
        margin-bottom: 5px;
        background-color: #f1f1f1;
    }

    #loadMore {
        padding: 10px;
        text-align: center;
        background-color: #33739E;
        color: #fff;
    }
    .col-1 {
        display: flex;
    }
    .col-2{
        width: 100%;
    }
    .title{
        border: black solid 1px;
    }
    .input_button{
        float: right;
    }
    .content{
        display: none;
    }
    .Container{
        display: none;
    }
</style>
<body>
<div class="col-all">
<?php
    $id = 0;
    $subId = 0;
        foreach ($content as $key => $value){
            $id++;
            ?>
            <div class="Container">
                <div class="col-1">
                    <div class="col-2">
                        <div class="title"><?php echo $key;?> </div>
                    </div>
                    <div class="col-6">
                        <input class="input_button" type="button" value="+" id="plus_<?php echo $id;?>">
                    </div>
                </div>
                <div class="content">
                    <?php
                    foreach ($value as $item){
                        echo "<div class=\"col_7\">".$item."</div>";
                    }
                ?>
                </div>
            </div>
            <?php
        }
    ?>
</div>
    <a href="#" id="loadMore">Load More</a>

</body>
</html>





