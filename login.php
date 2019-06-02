<?php
    require "header.php";
?>

<div class="big-form">
    <main class="small-form">
        <h1>Login</h1>

        <?php
    //displaying error messages
            if (isset($_GET['error'])) {

                if ($_GET['error'] == "emptyfields") {

                    echo "<div class='alert alert-danger' role='alert'>
                            Fill in all fields
                        </div>";
                }
                else if ($_GET['error'] == "invaliduidmail") {

                    echo "<div class='alert alert-danger' role='alert'>
                            Invalid username and email
                        </div>";
            
                }
                else if ($_GET['error'] == "invaliduid") {

                    echo "<div class='alert alert-danger' role='alert'>
                            Invalid username
                        </div>";
                }
                else if ($_GET['error'] == "invalidmail") {

                    echo "<div class='alert alert-danger' role='alert'>
                            Invalid email
                        </div>";
                }
                else if ($_GET['error'] == "passwordcheck") {

                    echo "<div class='alert alert-danger' role='alert'>
                            Your password do not match
                        </div>";
                }
                else if ($_GET['error'] == "usertaken") {

                    echo "<div class='alert alert-danger' role='alert'>
                            This username is already taken
                        </div>";
                }

            }

            else if ($_GET["signup"] == "success") {

                echo "<div class='alert alert-success' role='alert'>
                        Signup successful!
                    </div>";
            }

        ?>

        <form action="inc/login.inc.php" method="post">
        <div class="form-group">
            <label for="mail">Username / Email</label>
            <input type="text" name="mailuid" class="form-control" id="mail"  placeholder="Username / Email">   
        </div>
        <div class="form-group">
            <label for="pwdlogin">Password</label>
            <input type="password" name="pwd" class="form-control" id="pwdlogin" placeholder="Password">
        </div>
        <button type="submit" name="login-submit" class="btn btn-info btn-lg" id="submit-btn">Login</button>
        </form>

    
    </main>
</div>

<?php
    
    require "footer.php";

?>