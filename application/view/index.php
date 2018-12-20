<?php
    include '../model/HeWoModel.php';
    include '../view/HeWoView.php';
    include '../controller/HeWoController.php';

    session_start();

    $model = new HeWoModel();
    $controller = new HeWoController($model);
    $view = new HeWoView($controller, $model);
    $model->setView($view);
    $controller->setView($view);

    $_SESSION['model'] = $model;
    $_SESSION['view'] = $view;
    $_SESSION['controller'] = $controller;

    if (isset($_POST['LoginBtn'])) {
        $_SESSION['model']->account=$_POST['username'];
        $_SESSION['model']->password=$_POST['password'];
        
        $_SESSION['controller']->userHasInput($_POST['LoginBtn']);
    }
    $_SESSION['model']->initState("START");

?>
<!DOCTYPE HTML>
    <html><head>
        <title>Classic Sign In Form Responsive Widget Template :: w3layouts</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content="Classic Sign In Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
        />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- Meta tag Keywords -->
        <!-- css files -->
        <link rel="stylesheet" href="vendor/css/style.css" type="text/css" media="all" />
        <!-- Style-CSS -->
        <link rel="stylesheet" href="vendor/css/fontawesome-all.css">
        <!-- Font-Awesome-Icons-CSS -->
        <!-- //css files -->
        <!-- web-fonts -->
        <link href="//fonts.googleapis.com/css?family=Reem+Kufi&amp;subset=arabic" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <!-- //web-fonts -->
    </head>
    <body>
    <!-- title -->
    <h1>
        <span>H</span>ello <span>W</span>orld!
    </h1>
    <!-- //title -->
    <!-- content -->
    <div class="sub-main-w3">
        <form action="#" method="post">
            <div class="form-style-agile">
                <label>
                    Username
                    <i class="fas fa-user"></i>
                </label>
                <input placeholder="Username" name="username" type="text" >
            </div>
            <div class="form-style-agile">
                <label>
                    Password
                    <i class="fas fa-unlock-alt"></i>
                </label>
                <input placeholder="Password" name="password" type="password">
            </div>
            <!-- checkbox -->
            <div class="wthree-text">
                <ul>
                    <li>
                        <!-- switch -->
                        <div class="checkout-w3l">
                            <div class="demo5">
                                <div class="switch demo3">
                                    <input type="checkbox">
                                    <label>
                                        <i></i>
                                    </label>
                                </div>
                            </div>
                            <p>&nbsp Stay Signed In</p>
                        </div>
                        <!-- //checkout -->
                    </li>
                    <li>
                        <a href="">Forgot Password?</a>
                    </li>
                </ul>
            </div>
            <!-- //switch -->
            <input type="submit" name="LoginBtn" value="Login" >
        </form>
    </div>
    <!-- //content -->

    <!-- copyright -->
    <div class="footer">
        <p>&copy; 2018 Hello World social media.| Design by
            <a href="http://google.com">HeWo</a>
        </p>
    </div>
    <!-- //copyright -->

</body>
<!--<body>
    <form action="" method="POST">
        帳號：<input name="username" type="text" /><br/>
        密碼：<input name="password" type="password" /><br/>
      <input type="submit" name="LoginBtn" value="Login" >
    </form>
</body>-->
</html>