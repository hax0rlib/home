<!DOCTYPE html>
<html>
<head>
    <title>Hax0rlib - Web Developer and Pentester</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script
		src="https://code.jquery.com/jquery-3.1.1.min.js"
		integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		crossorigin="anonymous"></script>
		<script src="http://ccfullchecker.esy.es/assets/js/typed.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <ul class="nav nav-pills">

                    <li role="presentation" class="active">
                        <a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home </a></li>

                    <li role="presentation"><a href="#" ><span class="glyphicon glyphicon-user" aria-hidden="true"> Sobre </a></li>
                    <li role="presentation"><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"> Depoimentos </a></li>
                </ul>
            </div>
            <div class="container">
                <div class="col-md-3 centered">
                    <div class="profile">
                        <img src="img/profile.jpg" alt="..." class="img-circle">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
        <br>
        <br>
        <div class="col-md-6 centered">
        <pre><code><span class="digitando"></span></code></pre>
        </div>
    </div>

    <script>
    $(function() {
        $(".digitando").typed({
            strings: [
                "hax0rlib@breakware~: Hello, I'm Hax0rlib welcome to my site!<br>hax0rlib@breakware~: analyze system ... (100%)<br>hax0rlib@breakware~: analyze panel ... (100%)<br>hax0rlib@breakware~: download of data ... (100%)<br>hax0rlib@breakware~: you server IP: <?php echo $_SERVER["REMOTE_ADDR"]; ?><br>hax0rlib@breakware~: SYSTEM DEVELOPED BY <b>BREAKWARE SQUAD !</b>"
            ],
            typeSpeed: 30,
            backSpeed: 0
        });
    });
</script>
</body>

</html>
