<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/aboutMe.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap_3.6.min.css">
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap_3.6.min.js"></script>
    <script src="js/header.js"></script>
</head>
<body>
<header>
    <?php require_once './header.php'; ?>
</header>
<article>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 department"></div>
        </div>
        <div>
            <div id="boy" class="row">
                <div class="col-md-3 col-xs-12 col-sm-3 pic"><img src="img/daniel.jpg" alt="daniel"></div>
                <div class="col-md-6 col-xs-12 col-sm-6 info"><h3>簡介</h3><span>你好我是唐寧</span></div>
            </div>
        </div>
        <div>
            <div id="girl" class="row">
                <div class="col-md-3 col-xs-12 col-sm-3 col-md-push-6 col-sm-push-6 pic"><img src="img/lin.jpg"
                                                                                              alt="daniel"></div>
                <div class="col-md-6 col-xs-12 col-sm-6 col-md-pull-1 col-sm-pull-1 info"><h3>簡介</h3>
                    <span>你好我是林鈺琪</span></div>
            </div>
        </div>
    </div>
</article>
<footer>
    <?php require_once './footer.php'; ?>
</footer>
</body>
</html>