<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "myjokes";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName );

if(!$conn){
    die("Connection faild:".mysqli_connect_error());
}