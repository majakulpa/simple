<?php
    require "header.php";
?>

<div class="big-form">
    <main class="small-form">
        <h1>Signup</h1>

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

        <form action="inc/signup.inc.php" method="post">
        <div class="form-group">
            <label for="user">Username</label>
            <input type="text" name="uid" class="form-control" id="user"  placeholder="Username">   
        </div>
        <div class="form-group">
            <label for="emailsignup">Email address</label>
            <input type="email" name="mail" class="form-control" id="emailsignup" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="pwdsignup">Password</label>
            <input type="password" name="pwd" class="form-control" id="pwdsignup" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="pwdrepsignup">Repeat password</label>
            <input type="password" name="pwd-repeat" class="form-control" id="pwdrepsignup" placeholder="Repeat password">
        </div>
        <button type="submit" name="signup-submit" class="btn btn-info btn-lg" id="submit-btn">Submit</button>
        </form>

    
    </main>
</div>

<?php
    
    require "footer.php";

?>