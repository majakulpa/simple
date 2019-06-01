<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">

    <title>Twitter</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" >Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="?page=timeline">Your timeline</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=yourtweets">Your tweets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=publicprofiles">Public profiles</a>
        </li>
      </ul>

      <div class="form-inline pull-xs-right">

        <?php

            if(isset($_SESSION['userId'])) {
              echo '<form action="includes/logout.inc.php" method="post">

                  <button type="submit" name="logout-submit">Logout</button>
        
                </form>';
            }
            else {
              echo '<form action="includes/login.inc.php" method="post">

                    <input type="text" name="mailuid" placeholder="Username/Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>
          
                  </form>
          
                <a href="signup.php">Signup</a>';
            }

        ?>

        

      
      <?//php if ($_SESSION['id']) { ?>
      
         <!-- <a class="btn btn-success-outline" href="?function=logout">Logout</a>
      
        <?//php } else { ?>
      
          <button class="btn btn-success-outline-primary" data-toggle="modal" data-target="#myModal">Login/Signup</button>-->
      
        <?//php } ?>
      </div>
     </div>
</nav>