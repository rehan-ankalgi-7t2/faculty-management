<?php

$servername = "localhost";
$DbUsername = "root";
$DbPassword = "";
$DbName = "adminsignupdb";

$conn = mysqli_connect($servername, $DbUsername, $DbPassword, $DbName);

if( !$conn){
    die("connection to the database failed: ".mysqli_connect_error());
}