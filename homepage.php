<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Universal Movies - Homepage</title>
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
    .welcome-container {
      padding-top: 150px;
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a href="#" class="navbar-brand"> <img src="images/Logo2.png" alt=""> </a>
      <span class="navbar-text">Universal Movies</span>

      <ul class="navbar-nav ml-auto">
        <?php
        if (isset($_SESSION['id'])) {
          if ($_SESSION['id'] == 1) {
            echo "<li class='nav-item'> <a href='admin.php' class='nav-link'>Add movie</a> </li>";
          }
          echo "<li class='nav-item'> <a href='account.php' class='nav-link'>Account</a> </li>
                <li class='nav-item'> <a href='logout.php' class='nav-link'>Logout</a> </li>";
        } else {
          echo "<li class='nav-item'> <a href='user-login.php' class='nav-link'>Login</a> </li>";
          echo "<li class='nav-item'> <a href='text.php' class='nav-link'>Sign Up</a> </li>";
        }
             
            ?>
            </ul>  

    </nav>

    <div class="container-fluid text-center welcome-container">
      <?php
      if (isset($_SESSION['id'])) {
        include 'dbh.php';
        $id = $_SESSION['id'];
        $quer = "SELECT * FROM user1 WHERE id = '$id' ";
        $quer2 = "SELECT * FROM movies WHERE mid in (SELECT mid from user1 where id = '$id') ";
        $check2 = mysqli_query($conn,$quer2);
        $rel2 = mysqli_fetch_assoc($check2);
        $check = mysqli_query($conn,$quer);
        $rel = mysqli_fetch_assoc($check);
        echo "<h1 style='color: #fff;'>Welcome to" . ucwords($rel['name']) . "!</h1>";

        echo " 
    <div class='jumbotron' style='margin-top:15px;padding-top:30px;padding-bottom:30px;'>
    <div class='row'>
      <div class='col'>
        <form action='movie.php' method='POST'>
        <h4 style='color:black;font-size:30px;'>Recent :
        <input type='submit' name='submit' class='btn btn-success' style='display:inline;width:200px;margin-left:20px;margin-right:20px;' value='".ucwords($rel2['name'])."'/></h4>
        </form>
      </div>";
      } else {
        echo "<h1 style='color: #fff;' class='text-center'>WELCOME TO UNIVERSAL MOVIE</h1>";

      }

     
echo " 
    
      <div class='col'>
        <form action='search.php' method='POST'>
          <select  name='option' style='padding:5px;'>
            <option selected>Search By</option>
            <option value='name'>Name</option>
            <option value='genre'>Genre</option>
            <option value='rdate'>Release year</option>
          </select>
          <input type='text' placeholder='Enter..' style='margin-left:10px;margin-top:10px;padding:5px;' name='textoption'>
          <input type='submit' name='submit' class='btn btn-success' style='display:inline;width:100px;margin-left:20px;margin-right:20px;margin-top:5px;' value='Search'/></h4>
        </form>
      </div>
    </div>
    </div>";
      ?>
    </div>
  </header>

  <section>
    <div class="jumbotron">
      <h2>Latest Updated</h2>
      <div class="row">
        <?php
        include 'latest-fetcher.php';
        ?>
      </div>
    </div>

    <div class="jumbotron">
      <h2>All Movies</h2>
      <?php
      include 'fetcher.php';
      ?>
    </div>
  </section>

  <footer class="page-footer font-small blue">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 py-3">
          © 2018 tranglydiep@gmail.com
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
