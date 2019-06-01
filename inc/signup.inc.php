<?php //you don't have to close it, if there is no html, just pure php

if (isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';

    $username = $_POST['uid'];    //names from signup.php 
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {      //check if any field is empty
        
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    
    }

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) &&  !preg_match("/^[a-zA-Z0-9]*$/", $username)) {

        header("Location: ../signup.php?error=invalidmailuid");
        exit();

    }

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        header("Location: ../signup.php?error=invalidmail&uid=".$username);
        exit();

    }

    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {

        header("Location: ../signup.php?error=invaliduid&mail=".$email);
        exit();

    }

    else if ($password !== $passwordRepeat) {

        header("Location: ../signup.php?error=passwordcheck&uid=".$username);
        exit();

    }

    else {

        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";  //checking if username already exists in the database
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {

            header("Location: ../signup.php?error=sqlerror");
            exit();

        }

        else {          //put info from user to database
                //mysqli_stmt_bind_param($stmt, "ss", $username, $password ); -> 2 letters if you have 2 parameters, etc
            mysqli_stmt_bind_param($stmt, "s", $username );   // string=s, integer=i, blob=b, double=d, data type which we passing to the database
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            if ($resultCheck > 0) {    //0 means no other users with same username, 1 means there is one username with this info

                header("Location: ../signup.php?error=usertaken&mail=".$email);
                exit();

            }

            else {

                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";     //? are placeholders
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {

                    header("Location: ../signup.php?error=sqlerror");
                    exit();
        
                }

                else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);            //hashing the password

                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd );   // string=s, integer=i, blob=b, double=d, data type which we passing to the database
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success");
                    exit();


                }

            }

        }
 
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);


}

else {

    header("Location: ../signup.php");    //send user back to signup page
   exit();

}


