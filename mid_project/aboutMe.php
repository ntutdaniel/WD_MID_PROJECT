<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title></title>
    <link rel="stylesheet" href="css/aboutMe.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap_3.6.min.css">
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
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
                <div class="col-md-6 col-xs-12 col-sm-6 col-md-pull-1 info"><h3>簡介</h3><span>我叫唐唐</span></div>
            </div>
        </div>
        <div>
            <div id="girl" class="row">
                <div class="col-md-3 col-xs-12 col-sm-3 col-md-push-6 col-sm-push-6 pic"><img src="img/lin.jpg"
                                                                                              alt="lin"><span>Girl</span>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6 col-md-pull-1 col-sm-pull-1 info"><h3>簡介</h3>
                    <span>你好我是林鈺琪</span></div>
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