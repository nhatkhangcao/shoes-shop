<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "login";
$conn = mysqli_connect($server,$user,$password,$database);
if (!$conn){
    echo"<script>alert('Connection Failed')</script>";
}

?>