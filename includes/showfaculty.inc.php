<?php

    require "dbh.inc.php";

        $sql = "SELECT * FROM faculty;";
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);

        if($resultcheck > 0){
            echo "firstname___lastname___department___experience"."<br>";
            while($row = mysqli_fetch_assoc($result)){
                echo $row['facultyid']."___",$row['firstname']."___",$row['lastname']."___",$row['department']."___",$row['experience'] . "<br>";
            }
        }
    // mysqli_stmt_close();
    mysqli_close($conn);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>delete page</title>
    <style>
        body{
            padding:0;
            margin:0;
            font-size: 24px;
        }
    </style>
</head>
<body>

</body>
</html>















