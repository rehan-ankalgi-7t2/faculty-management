<?php

if(isset($_POST['AddFaculty'])) {
    require "dbh.inc.php";

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $department = $_POST['department'];
    $experience = $_POST['experience'];

    if(empty($firstname)||empty($lastname)||empty($department)||empty($experience)){
        header("location: ../signup.php?error=emptyFields&full-name=".$username."&admin-email=".$email);
        exit();
    }else{
        $sql = "INSERT INTO faculty (firstname, lastname, department, experience) VALUES (?, ?, ?, ?)" ;
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("location: ../facultyinsert.php.php?error=sqlerror");
                    exit(); 
                }
                else{
                    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sssi", $firstname, $lastname, $department, $experience);
                    mysqli_stmt_execute($stmt);
                    header("location: ../faculty.php?addedFaculty=success");
                    exit(); 
                }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
    
?>













