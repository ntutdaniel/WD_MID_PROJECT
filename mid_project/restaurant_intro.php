<?php
session_start();
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>I am a test</title>
  </head>

  <body>
    <header>
        <?php require_once './header.php'; ?>
    </header>

<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="css/bootstrap/bootstrap_3.6.min.css">
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/restaurant_intro.css">
    <link rel="stylesheet" href="css/footer.css"/>
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap_3.6.min.js"></script>
    <script src="js/header.js"></script>
    <script src="js/restaurant_intro.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet'>
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp2/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    <div class="slider">
      <div class="slide active-slide">
        <div class="container">
          <div class="row">
            <div class="slide-copy col-xs-5 ">
              <h1>AJC 大叔便當</h1>
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
                 餐廳營業時間：11:00~19:00<br>
              </p>
            </div>

            <div class="slide-img col-xs-7">
              <img   src="https://raw.githubusercontent.com/ntutdaniel/WD_MID_PROJECT/master/mid_project/img/M-2.jpg" height="300px">
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
              <h1>基本版型</h1>
              <p><br><br><br><br></p>
              <p><br><br><br><br></p>
              <p><br><br><br><br>
                 餐廳營業時間：11:00~19:00<br>
              </p>
            </div>
            <div class="slide-img col-xs-7">
              <img src="https://raw.githubusercontent.com/ntutdaniel/WD_MID_PROJECT/master/mid_project/img/M-2.jpg"  height="300px">
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
              <h1>晚點有空再拍照</h1>
              <p><br><br><br><br></p>
              <p><br><br><br><br></p>
              <p><br><br><br><br>
                 餐廳營業時間：11:00~19:00<br>
              </p>
            </div>
            <div class="slide-img col-xs-7">
              <img src="https://raw.githubusercontent.com/ntutdaniel/WD_MID_PROJECT/master/mid_project/img/M-2.jpg"  height="300px">
            </div>
            <a href="#" class="arrow-prev"><img src="./img/arrow-2.PNG"></a>
            <a href="#" class="arrow-next"><img src="./img/arrow-1.PNG"></a>
          </div>
        </div>
      </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="app.js"></script>
  </body>
</html>


        <footer>
           <?php require_once './footer.php'; ?>
       </footer>

  </body>
</html>
