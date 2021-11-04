<?php

if(isset($_POST['admin-signup-submit'])) {
    require "dbh.inc.php";

    $username = $_POST['full-name'];
    $email = $_POST['admin-email'];
    $password = $_POST['admin-signup-pwd'];
    $confirm_password = $_POST['admin-signup-pwd-confirm'];

    if(empty($username) || empty($email) || empty($password) || empty($confirm_password)){
        header("location: ../signup.php?error=emptyFields&full-name=".$username."&admin-email=".$email);
        exit();
    } 
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/[^a-zA-Z0-9]*$/", $username)){
        header("location: ../signup.php?error=emptyFields");
        exit();        
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("location: ../signup.php?error=invalidEmail&full-name=".$username);
        exit();
    } 
    elseif( !preg_match("/[^a-zA-Z0-9]*$/", $username)) {
        header("location: ../signup.php?error=invalidUid&admin-email=".$email);
        exit();
    }
    elseif($password !== $confirm_password){
        header("location: ../signup.php?error=passwordheck&full-name=".$username."&admin-email".$email);
        exit();
    }
    else{
        $sql = "SELECT adminname FROM admins WHERE adminname=?" ;
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../signup.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                header("location: ../signup.php?error=usertaken&admin-email=".$email);
                exit();
            }
            else{
                $sql = "INSERT INTO admins (adminname, adminmail, adminpwd) VALUES (?, ?, ?)" ;
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("location: ../signup.php?error=sqlerror");
                    exit(); 
                }
                else{
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
                    mysqli_stmt_execute($stmt);
                    header("location: ../index.php?signup=success");
                    exit(); 
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("location: ../signup.php");
    exit();
}
?>













