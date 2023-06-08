<?php
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Universal Movies
    </title>
    <link rel="stylesheet" href="master.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark1">
            <a href="homepage.php" class="navbar-brand"> <img src="images/Logo2.png" alt=""> </a>
            <span class="navbar-text">Universal Movies
            </span>

            <ul class="navbar-nav">
              <li class="nav-item1"> <a href="#A" class="nav-link"> Services</a> </li>
              <li class="nav-item1"> <a href="user-login.php" class="nav-link"> Sign In</a> </li>

            </ul>

        </nav>

        <div class="container">
          <div class="jumbotron">
            <h1>Watch Anywhere, <br> Watch Anytime... </h1> <br>
            <a href="test.php" type="button" class="btn btn-danger btn-block">Sign Up Now</a>
          </div>
        </div>
      </div>

      </header>



    <section class="features">
        <a href="#" name="A"></a>
        <h2>Our Services</h2>

        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <p class="arrange"><img src="images/mob.png" alt=""> <br> Explore this unique film website right on your mobile phone with our dedicated app. Easy to download and use, this app will take you on an incredible movie-watching experience on your mobile device.
              </p>
            </div><div class="col-md-4">
              <p class="arrange"><img src="images/mess.png" alt=""> <br> With our 24/7 support service, we are committed to assisting you with any inquiries related to your movie-watching experience. Don't worry about time or day, our support team will always be here to answer your questions and help you fully enjoy the pleasure of watching movies.
              </p>
            </div>
              <div class="col-md-4">

                <p class="arrange">
                  <img src="images/desktop.jpg"> <br>  Take your movie-watching experience to the next level by accessing our film website on your laptop. With a larger screen and enhanced capabilities, you can immerse yourself in the world of movies with stunning visuals and crisp audio right from the comfort of your laptop.
                </p>
              </div>

            </div>

          </div>
          <h3></h3>

    </section>
    <footer class="page-footer font-small blue">

      <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="">tranglydiep@gmail.com</a>
      </div>

    </footer>
  </body>
</html>
