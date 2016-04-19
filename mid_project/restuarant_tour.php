<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>北科I美食</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap_3.6.min.css">
    <link rel="stylesheet" href="css/restuarant_tour.css"/>
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap_3.6.min.js"></script>
    <script src="js/header.js"></script>
</head>
<body>
<header>
    <?php require_once './header.php'; ?>
</header>
<article>
    <!--LOGO-->
    <div class="container">
        <div id="logo-box"></div>
        <div id="restaurant-menu">
            <button class="btn btn-primary" onclick="location.href='#'">AJC 菜單</button>
        </div>
        <ul class="list-unstyled">
            <li class="col-md-12 col-xs-12 col-sm-12 meal-title">半雞套餐</li>
            <li class="col-md-3 col-xs-12 col-sm-3 meal-pic">
                <div></div>
            </li>
            <li class="col-md-9 col-xs-12 col-sm-9 meal-item">
                <ul class="list-unstyled">
                    <li><span>原味醬油-半雞 $200</span></li>
                    <li><span>辣味-半雞 $200</span></li>
                    <li>雙味(醬油+辣味)-半雞 $200</li>
                    <li>青蔥醬油-半雞 $220</li>
                    <li>經典脆皮(搭配雙醬)-半雞 $200</li>
                </ul>
            </li>
            <li class="col-md-12 col-xs-12 col-sm-12 meal-title">配菜</li>
            <li class="col-md-3 col-xs-12 col-sm-3 meal-pic2">
                <div></div>
            </li>
            <li class="col-md-9 col-xs-12 col-sm-9 meal-item">
                <ul class="list-unstyled">
                    <li><span>田園沙拉 Grand Salads $30</span></li>
                    <li><span>炸年糕 Fried Rice Cakes $30</span></li>
                    <li>白飯 Rice $20</li>
                    <li>玉米 Corn $20</li>
                    <li>低脂雞胸沙拉 Chicken Salad $50</li>
                </ul>
            </li>
        </ul>
    </div>
</article>
<footer>
    <?php require_once './footer.php'; ?>
</footer>
</body>
</html>