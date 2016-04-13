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
    <script src="js/script.js"></script>
</head>
<body>
  <header>
      <?php require_once './header.php'; ?>
  </header>
  <div class="container">
      <nav class="navbar">
        <div class="navbar-brand">
            <img src="img/logo.png">
            <a id="brand-fixed" href="index.html">北科Ｉ美食</a>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"
                    onclick="click_menu()">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul id="navbar-fixed" class="nav navbar-nav">
                <li><a href="#">餐廳導覽</a></li>
                <li><a href="#">餐廳介紹</a></li>
                <li><a href="#">美味餐點</a></li>
                <li><a href="#">最新消息</a></li>
                <li><a href="#">關於我們</a></li>
            </ul>
        </div>
      </nav>
  </div><!--container-->

  <div class="container">
    <img class="titleImg" src="img/guideMain.jpg">

    <ul class="list-unstyled">
        <li class="col-md-12 col-xs-12 col-sm-12 meal-title">63牛排</li>
        <li class="col-md-6 col-xs-12 col-sm-6" >
            <div class="test-pic">
              <img src="img/63837.jpg">
            </div>
        </li>
        <li class="col-md-6 col-xs-12 col-sm-6" >
            <div class="test-pic">
              <img src="img/I-2.PNG">
            </div>
        </li>

          <li class="col-md-12 col-xs-12 col-sm-12 meal-title">天津蔥抓餅</li>
          <li class="col-md-6 col-xs-12 col-sm-6" >
            <div class="test-pic">
              <img  src="img/LOGO3.PNG">
            </div>
        </li>
        <li class="col-md-6 col-xs-12 col-sm-6" >
            <div class="test-pic">
              <img src="img/lightEat1.PNG">
            </div>
          </li>

          <li class="col-md-12 col-xs-12 col-sm-12 meal-title">香港燒臘</li>
            <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/not_yet.PNG">
              </div>
          </li>
          <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/E-2.PNG">
              </div>
          </li>

          <li class="col-md-12 col-xs-12 col-sm-12 meal-title">麗陽自助餐</li>
            <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/not_yet.PNG">
              </div>
          </li>
          <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/B-6.PNG">
              </div>
          </li>

          <li class="col-md-12 col-xs-12 col-sm-12 meal-title">素還真</li>
            <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/not_yet.PNG">
              </div>
          </li>
          <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/C-4.PNG">
              </div>
          </li>

          <li class="col-md-12 col-xs-12 col-sm-12 meal-title">海音咖啡</li>
            <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/D-6.png">
              </div>
          </li>
          <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/D-7.png">
              </div>
          </li>

          <li class="col-md-12 col-xs-12 col-sm-12 meal-title">鵲兒思啼</li>
            <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/F-1.jpg">
              </div>
          </li>
          <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/G-2.PNG">
              </div>
          </li>

          <li class="col-md-12 col-xs-12 col-sm-12 meal-title">金盃美而美</li>
            <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/A-1.PNG">
              </div>
          </li>
          <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/A-2.PNG">
              </div>
          </li>

          <li class="col-md-12 col-xs-12 col-sm-12 meal-title">意鼎</li>
            <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/K-1.png">
              </div>
          </li>
          <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/J-2.PNG">
              </div>
          </li>

          <li class="col-md-12 col-xs-12 col-sm-12 meal-title">好地方快餐</li>
            <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/J-1.png">
              </div>
          </li>
          <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/K-2.PNG">
              </div>
          </li>

          <li class="col-md-12 col-xs-12 col-sm-12 meal-title">拌拌極好食</li>
            <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/L-1.png">
              </div>
          </li>
          <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/L-2.PNG">
              </div>
          </li>

          <li class="col-md-12 col-xs-12 col-sm-12 meal-title">AJAC大叔</li>
            <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/M-2.jpg">
              </div>
          </li>
          <li class="col-md-6 col-xs-12 col-sm-6" >
              <div class="test-pic">
                <img src="img/M-1.PNG">
              </div>
          </li>
    </ul>

    <footer>
        <?php require_once './footer.php'; ?>
    </footer>

  </div><!--container-->

</body>
</html>
