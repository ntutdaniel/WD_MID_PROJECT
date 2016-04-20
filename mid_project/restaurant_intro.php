<?php
session_start();
?>

<!DOCTYPE html>
<html >
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap/bootstrap_3.6.min.css">
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/restaurant_intro.css">
    <link rel="stylesheet" href="css/footer.css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap_3.6.min.js"></script>
    <script src="js/header.js"></script>
    <script src="js/restaurant_intro.js"></script>
    <title>北科I美食</title>
</head>

<body>
<header>
    <?php require_once './header.php'; ?>
</header>
<div class="slider">
    <div class="slide active-slide">
        <div class="container">
            <div class="row">

                <div class="slide-copy col-xs-5 ">

                    <a href="http://workforland.azurewebsites.net/wd/mid/restuarant_tour.php">
                        <h1>AJC 大叔便當</h1>
                    </a>
                    <img src="./img/symbol.png">
                    <p>&nbspFRESH&nbsp&nbsp新鮮美味<br>
                        大叔的雞肉採用台灣新鮮冷藏雞肉，<br>
                        國內上市公司優良合格供應商，<br>
                        點餐後店內現做供應，美味吃出。<br>
                    </p>
                    <p>
                        <img src="./img/symbol.png">
                        &nbspSAFE&nbsp&nbsp安心食材<br>
                        大叔使用芥花油，<br>
                        它的飽和脂肪不到橄欖油或大豆油的一半,<br>
                        在加拿大和日本它是排名第一的植物油。<br>
                    </p>
                    <p>
                        <img src="./img/symbol.png">
                        &nbspSERVICE&nbsp&nbsp服務熱誠<br>
                        讓消費者滿意是大叔不斷努力的方向，<br>
                        頃聽消費者對飲食的要求，<br>
                        並且感受大叔對每項服務的熱誠。<br><br>
                        餐廳營業時間：11:00~20:00<br>
                    </p>
                </div>

                <div class="slide-img col-xs-7">
                    <a href="http://workforland.azurewebsites.net/wd/mid/restuarant_tour.php">
                        <img   src="https://raw.githubusercontent.com/ntutdaniel/WD_MID_PROJECT/master/mid_project/img/M-2.jpg" height="300px">
                    </a>
                </div>
                <a href="#" class="arrow-prev"><img src="./img/arrow-2.PNG"></a>
                <a href="#" class="arrow-next"><img src="./img/arrow-1.PNG"></a>
            </div>
        </div>
    </div>

    <div class="slide">
        <div class="container">
            <div class="row">
                <div class="slide-copy col-xs-5">
                    <h1>鵲兒思啼</h1>
                    <p>我們的奶茶是北科通腸保證，<br><br>
                        跟金盃美而美位於正對面，<br><br>
                        交互輝映，<br><br>閃閃發亮。
                        <br><br></p>
                    <p></p>
                    <p>全館飲品9折優惠，<br><br>快點照片看菜單！<br><br>
                        餐廳營業時間：09:00~19:00<br>
                    </p>
                </div>
                <div class="slide-img col-xs-7">
                    <a href="http://workforland.azurewebsites.net/wd/mid/restuarant_tour.php">
                        <img src="./img/65211.jpg"  height="300px">
                    </a>
                </div>
                <a href="#" class="arrow-prev"><img src="./img/arrow-2.PNG"></a>
                <a href="#" class="arrow-next"><img src="./img/arrow-1.PNG"></a>
            </div>
        </div>
    </div>


    <div class="slide">
        <div class="container">
            <div class="row">
                <div class="slide-copy col-xs-5">
                    <h1>好地方快餐坊</h1>
                    <p>安安大家好，<br><br>
                        料多實在味好<br><br></p>
                    <p>就是說我們店了<br><br>
                        還可以免費加飯加大歐<br><br></p>
                    <p>快點照片看菜單吧<br><br><br><br>
                        餐廳營業時間：11:00~19:00<br>
                    </p>
                </div>
                <div class="slide-img col-xs-7">
                    <a href="http://workforland.azurewebsites.net/wd/mid/restuarant_tour.php">
                        <img src="./img/65207.jpg"  height="300px">
                    </a>
                </div>
                <a href="#" class="arrow-prev"><img src="./img/arrow-2.PNG"></a>
                <a href="#" class="arrow-next"><img src="./img/arrow-1.PNG"></a>
            </div>
        </div>
    </div>
</div>
<footer>
    <?php require_once './footer.php'; ?>
</footer>

</body>
</html>
