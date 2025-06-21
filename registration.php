<?php
include('conncetion.php');
$name=htmlspecialchars($_POST['name']);
$address=$_POST['address'];
$roll=$_POST['roll'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$faculty=$_POST['faculty'];
$remarks=$_POST['remarks'];
$sql = "INSERT INTO `student` (`roll`, `name`, `faculty`, `gender`, `address`, `email`, `remarks`) VALUES ('$roll', '$name', '$faculty', '$gender', '$address', '$email', '$remarks');";
$row=mysqli_query($conn,$sql);
if(isset($row))
{
    echo 'Data inserted Sucessfully';
}

?>