<?php

$host="localhost";
$username="root";
$password=null;
$database = "dscuss";  // ✅ must match the database where your users table is
$port=3308;

$conn=new mysqli($host,$username,$password,$database,$port);

if($conn->connect_error){
    die("not connected with db".$conn->connect_error);
}




?>


