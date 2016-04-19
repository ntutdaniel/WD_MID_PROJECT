<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>北科I美食ㄆ</title>
    <link rel="stylesheet" href="css/aboutMe.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap_3.6.min.css">
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap_3.6.min.js"></script>
    <script src="js/header.js"></script>
    <script src="js/aboutMe.js"></script>
</head>
<body>
<header>
    <?php require_once './header.php'; ?>
</header>
<article>
    <div id="container-fixed" class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 department"></div>
        </div>
        <div>
            <div id="boy" class="row">
                <div class="col-md-3 col-xs-12 col-sm-3 pic"><img src="img/daniel.jpg"
                                                                  alt="daniel"><span>Daniel Tang</span></div>
                <div class="col-md-6 col-xs-12 col-sm-6 col-md-pull-2 info"><h3>簡介</h3><span>你好我是唐弟弟，很高興這學期修習這門網頁的學生，我負責的部分有navbar、footer、美味餐點、最新消息、關於我們。</span>
                </div>
            </div>
        </div>
        <div>
            <div id="girl" class="row">
                <div class="col-md-3 col-xs-12 col-sm-3 col-md-push-6 col-sm-push-6 pic"><img src="img/lin.jpg"
                                                                                              alt="lin"><span>Ms. Lin</span>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6 col-md-pull-1 col-sm-pull-1 info"><h3>簡介</h3>
                    <span>你好我是林妹妹，很高興這學期修習這門網頁的學生，我負責的部分有首頁、餐聽導覽、餐廳介紹。</span></div>
            </div>
        </div>
    </div>
</article>
<footer>
    <div class="footer">
        <?php require_once './footer.php'; ?>
    </div>
</footer>
</body>
</html>