<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>NTUT_I_Restaurant</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap_3.6.min.css">
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/guide.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap_3.6.min.js"></script>
    <script src="js/header.js"></script>
    <script src="js/guide.js"></script>
</head>
<body>
<header>
    <?php require_once './header.php'; ?>
</header>

<div class="container">
    <img class="titleImg" src="img/guideMain.jpg">

    <ul class="list-unstyled">
        <div class="col-xs-12 col-md-6 col-lg-6 row-item">
            <li class="meal-title">63牛排</li>
            <li class="col-xs-12 col-sm-6 col-md-6 test-pic">
                <img id="bigger1" src="img/63837.jpg">
            </li>
            <li class="col-xs-12 col-sm-6 col-md-6 test-pic">
                <img id="bigger2" src="img/I-2.PNG">
            </li>
        </div>
        <!--row-item-->

        <div class="col-xs-12 col-md-6 col-lg-6 row-item">
            <li class="meal-title">天津蔥抓餅</li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger3" src="img/LOGO3.PNG">
            </li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger4" src="img/lightEat1.PNG">
            </li>
        </div>
        <!--row-item-->

        <div class="col-xs-12 col-md-6 col-lg-6 row-item">
            <li class="meal-title">香港燒臘</li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger5" src="img/not_yet.PNG">
            </li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger6" src="img/E-2.PNG">
            </li>
        </div>
        <!--row-item-->

        <div class="col-xs-12 col-md-6 col-lg-6 row-item">
            <li class="meal-title">麗陽自助餐</li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger7" src="img/B-2.PNG">
            </li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger8" src="img/B-6.PNG">
            </li>
        </div>
        <!--row-item-->

        <div class="col-xs-12 col-md-6 col-lg-6 row-item">
            <li class="meal-title">素還真</li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger9" src="img/C-1.jpg">
            </li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger10" src="img/C-4.PNG">
            </li>
        </div>
        <!--row-item-->

        <div class="col-xs-12 col-md-6 col-lg-6 row-item">
            <li class="meal-title">海音咖啡</li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger11" src="img/D-6.png">
            </li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger12" src="img/D-7.png">
            </li>
        </div>
        <!--row-item-->

        <div class="col-xs-12 col-md-6 col-lg-6 row-item">
            <li class="meal-title">鵲兒思啼</li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger13" src="img/F-1.jpg">
            </li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger14" src="img/G-2.PNG">
            </li>
        </div>
        <!--row-item-->

        <div class="col-xs-12 col-md-6 col-lg-6 row-item">
            <li class="meal-title">金盃美而美</li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger15" src="img/A-1.PNG">
            </li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger16" src="img/A-2.PNG">
            </li>
        </div>
        <!--row-item-->

        <div class="col-xs-12 col-md-6 col-lg-6 row-item">
            <li class="meal-title">意鼎</li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger17" src="img/K-1.png">
            </li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger18" src="img/J-2.PNG">
            </li>
        </div>
        <!--row-item-->

        <div class="col-xs-12 col-md-6 col-lg-6 row-item">
            <li class="meal-title">好地方快餐</li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger19" src="img/J-1.png">
            </li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger20" src="img/K-2.PNG">
            </li>
        </div>
        <!--row-item-->

        <div class="col-xs-12 col-md-6 col-lg-6 row-item">
            <li class="meal-title">拌伴極好食</li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger21" src="img/L-1.png">
            </li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger22" src="img/L-2.PNG">
            </li>
        </div>
        <!--row-item-->

        <div class="col-xs-12 col-md-6 col-lg-6 row-item">
            <li class="meal-title">AJAC大叔</li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger23" src="img/M-2.jpg">
            </li>
            <li class="col-xs-12 col-sm-6 col-md-6  test-pic">
                <img id="bigger24" src="img/M-1.PNG">
            </li>
        </div>
        <!--row-item-->


    </ul>

    <footer>
        <?php require_once './footer.php'; ?>
    </footer>
</div>
<!--container-->

</body>
</html>
