<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="import" href="header.html">
    <link rel="import" href="footer.html">
    <link rel="stylesheet" href="css/aboutMe.css">
    <script type="text/javascript">
        $.get("header.html", function (data) {
            $("#header").html(data);
        });
    </script>
    <script type="text/javascript">
        $.get("footer.html", function (data) {
            $("#footer").html(data);
        })
    </script>
    <link rel="stylesheet" href="css/bootstrap/bootstrap_3.6.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap_3.6.min.js"></script>
</head>
<body>
<header>
    <div id="header"></div>
</header>
<article>
    <div class="container">
        <div>
            <div class="row">
                <div class="col-md-3 col-xs-12 col-sm-3 pic"><img src="img/daniel.jpg" alt="daniel"></div>
                <div class="col-md-6 col-xs-12 col-sm-6 info"><h3>簡介</h3><span>你好我是唐寧</span></div>
            </div>
        </div>
        <div>
            <div id="girl" class="row">
                <div class="col-md-3 col-xs-12 col-sm-3 col-md-push-6 col-sm-push-6 pic"><img src="img/lin.jpg" alt="daniel"></div>
                <div class="col-md-6 col-xs-12 col-sm-6 col-md-pull-1 col-sm-pull-1 info"><h3>簡介</h3><span>你好我是林鈺琪</span></div>
            </div>
        </div>
    </div>
</article>
<footer>
    <div id="footer"></div>
</footer>
</body>
</html>