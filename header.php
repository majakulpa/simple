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
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/2786752bf6.js"></script>
    

    <title>Project</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="project.php" >Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   
    </button>

  

      <div class="form-inline pull-xs-right">

        <?php

            if(isset($_SESSION['userId'])) {
              echo '<form action="inc/logout.inc.php" method="post">

                  <button class="btn btn-outline-light btn-lg" type="submit" name="logout-submit" id="logout-button">Logout</button>
        
                </form>';
            }
            else {
              echo '<a class="btn btn-outline-light btn-lg" id="login-link" href="login.php">Login</a>
                <a class="btn btn-outline-light btn-lg" id="signup-link" href="signup.php">Signup</a>';
            }

        ?>

        

      
      <?//php if ($_SESSION['id']) { ?>
      
         <!-- <a class="btn btn-success-outline" href="?function=logout">Logout</a>
      
        <?//php } else { ?>
      
          <button class="btn btn-success-outline-primary" data-toggle="modal" data-target="#myModal">Login/Signup</button>-->
      
        <?//php } ?>
      </div>
     
</nav>