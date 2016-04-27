<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>NTUT_I_Restaurant</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap_3.6.min.css">
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="css/footer.css"/>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap_3.6.min.js"></script>
    <script src="js/header.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

<header>
    <?php require_once "./header.php" ?>
</header>
<!--container-->

<div class="container">
    <div class="logo">
        <img src="img/title_logo.png">
    </div>
    <div class="logo">
        <img class="logoBoarder" src="img/LOGO2.png">
    </div>


    <div class="mainItem">
        <ul class="list-unstyled">
            <li class="col-md-3 col-xs-12 col-sm-3">
                <ul class="list-unstyled">
                    <div class="item">
                        <li><a href="#"><img class="indexImg" src="img/B-1.png"></a></li>
                        <li class="word">麗陽自助餐</li>
                    </div>
                </ul>
            </li>
            <li class="col-md-9 col-xs-12  ">
                <ul class="list-unstyled">
                    <div class="item">
                        <li><a href="#"><img class="indexImg" src="img/lightEat1.PNG"></a></li>
                        <li class="word">金盃美而美</li>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
    <!--mainItem-->

    <footer id="footer">
        <?php require_once "./footer.php" ?>
    </footer>
    <!--footer-->
</div>
<!--container-->
</body>
</html>
