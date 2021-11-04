<?php

if(isset($_POST['DELETEfaculty'])) {
    require "dbh.inc.php";

    $firstname = $_POST['firstname'];
    // $prevFirstName = $_POST['lastname'];
    

    if(empty($firstname)){
        header("location: ../facultydelete.php?error=emptyFields");
        exit();
    }else{
        $sql = "DELETE FROM faculty WHERE firstname = ?" ;
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("location: ../facultydelete.php.php?error=sqlerror");
                exit(); 
            }else{
                    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "s", $firstname);
                mysqli_stmt_execute($stmt);
                header("location: ../facultydelete.php?deletedFaculty=success");
                exit(); 
            }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
    
?>













