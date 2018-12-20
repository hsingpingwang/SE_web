<?php
    include '../model/HeWoModel.php';
    include '../view/HeWoView.php';
    include '../controller/HeWoController.php';

    session_start();
    // echo $_SESSION['model']->account;
    // echo $_SESSION['model']->password;
    if (isset($_POST['FriendBtn'])) {
        $_SESSION['controller']->userHasInput($_POST['FriendBtn']);
    }
    if (isset($_POST['FamilyBtn'])) {
        $_SESSION['controller']->userHasInput($_POST['FamilyBtn']);
    }
    if (isset($_POST['CardBtn'])) {
        $_SESSION['controller']->userHasInput($_POST['CardBtn']);
    }
    if (isset($_POST['HomeBtn'])) {
        $_SESSION['controller']->userHasInput($_POST['HomeBtn']);
    }
    if (isset($_POST['LogoutBtn'])) {
        $_SESSION['controller']->userHasInput($_POST['LogoutBtn']); 
    }
    $_SESSION['model']->initState("HOME");
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hello World</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="vendor/css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="home.php">Hello World</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <form action="" method="POST">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <!--<input class="nav-link" type="submit" name="HomeBtn" value="Home" >-->
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <!--<input class="nav-link" type="submit" name="FriendBtn" value="Friend" >-->
              <a class="nav-link" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
              <!--<input class="nav-link" type="submit" name="CardBtn" value="Card" >-->
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <!--<input class="nav-link" type="submit" name="FriendBtn" value="Friend" >-->
              <a class="nav-link" href="Friend.View.php">Friend</a>
            </li>
            <li class="nav-item">
              <!--<input class="nav-link" type="submit" name="FamilyBtn" value="Family" >-->
              <a class="nav-link" href="Family.View.php">Family</a>
            </li>
            <li class="nav-item">
              <!--<input class="nav-link" type="submit" name="CardBtn" value="Card" >-->
              <a class="nav-link" href="Card.View.php">Card</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Logout</a>
              <!--<input class="nav-link" type="submit" name="LogoutBtn" value="Logout" >-->
            </li>
          </ul>
        </form>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('vendor/img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Clean Blog</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="post.php">
              <h2 class="post-title">
                Man must explore, and this is exploration at its greatest
              </h2>
              <h3 class="post-subtitle">
                Problems look mighty small from 150 miles up
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 24, 2018</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.php">
              <h2 class="post-title">
                I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
              </h2>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 18, 2018</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.php">
              <h2 class="post-title">
                Science has not yet mastered prophecy
              </h2>
              <h3 class="post-subtitle">
                We predict too much for the next year and yet far too little for the next ten.
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on August 24, 2018</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.php">
              <h2 class="post-title">
                Failure is not an option
              </h2>
              <h3 class="post-subtitle">
                Many say exploration is part of our destiny, but it’s actually our duty to future generations.
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on July 8, 2018</p>
          </div>
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/vendor/jquery/jquery.min.js"></script>
    <script src="vendor/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="vendor/js/clean-blog.min.js"></script>

  </body>

</html>
