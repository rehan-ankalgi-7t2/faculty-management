<?php
    if (isset($_POST['admin-login-submit'])) {
        require "dbh.inc.php";

        // $username = $_POST['admin-name'];
        $email = $_POST['admin-email'];
        $password = $_POST['admin-login-pwd'];

        if(empty($email) || empty($password)){
            header("location: ../index.php?error=emptyFields");
            exit();
        }
        else{
            $sql = "SELECT * FROM admins WHERE adminmail=? && adminpwd=?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("location: ../index.php?sqlierror");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt, "ss", $email, $password);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $result=mysqli_stmt_num_rows($stmt);
                //echo ($result);
                // console.log($result);
                if($result>0) {
                      header("location: ../homepage.php?this_is_the_homepage");
                    echo"success";
                    //$passwordcheck = password_verify($password, $row['adminpwd']);
                    // if ($passwordcheck == false) {
                    //     header("location: ../index.php?wrong password");
                    //     exit(); 
                    // }
                    // 
                } else {
                        header("location: ../index.php?nosuchuser!");
                        exit();    
                } 
            }
        }
    }
    else {
        header("location: ../index.php");
        exit();
    }
?>
