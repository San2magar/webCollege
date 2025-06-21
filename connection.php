<?php
$server="localhost";
$user="root";
$password="";
$db="hcoe_db";
$conn=mysqli_connect($server,$user,$password,$db);
if(!$conn){
    die("connection failed".mysqli_connect_error());
}
else{
    echo "connection sucessful";
}
?>