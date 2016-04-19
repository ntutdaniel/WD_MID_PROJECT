<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap_3.6.min.css">
    <link rel="stylesheet" href="css/news.css"/>
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <link rel="stylesheet" href="css/lightbox.css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap_3.6.min.js"></script>
    <script src="js/news.js"></script>
    <script src="js/lightbox.js"></script>
</head>
<body>
<header>
    <?php require_once "./header.php" ?>
</header>
<article>
    <div class="news row">
        <div class="single-item col-md-6">
            <div class="left-set col-md-6"">
                <a href="img/ajc-1.jpg"><img class="" src="img/ajc-1.jpg"
                                                                       alt=""/></a>
            </div>
            <div class="right-set col-md-6">
                <div class="name">大叔-迎新活動</div>
                <div class="subname">全雞套餐優惠</div>
                <div class="price">$390 UP</div>
                <div class="description">
                    <p>
                        凡外帶圈幾套餐乙份，即贈送古早味紅茶乙瓶，與低脂雞肉沙拉乙份。
                    </p>
                </div>
                <button onclick="window.location.href='http://www.ajc.com.tw/page/ajc-chicken.meepshop.com%2Fnews'">
                    友善連結
                </button>
            </div>
        </div>
    </div>

    <div class="news row">
        <div class="single-item col-md-6">
            <div class="left-set col-md-6">
                <a><img src="img/bundle.jpg"
                        alt=""/></a>
            </div>
            <div class="right-set col-md-6">
                <div class="name">拌伴致理店極好食</div>
                <div class="subname">套餐優惠</div>
                <div class="price">$55 UP</div>
                <div class="description">
                    <p>
                        大拌擦一下口水 噗~
                    </p>
                </div>
                <button onclick="window.location.href='https://www.facebook.com/BundleDeliGroup/'">
                    友善連結
                </button>
            </div>
        </div>
    </div>
</article>
<footer id="footer">
    <?php require_once "./footer.php" ?>
</footer>
</body>
</html>