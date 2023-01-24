<?php

$conn mysqli_connect('localhost','root','','inscription') or die(mysqli_error());

$First_Name = $_POST['First Name'];
$Last_Name = $_POST['Last Name'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];

$req = "insert into client (First Name, Last Name , Email , Password) values('$First_Name' , '$Last_Name' , '$Email','$Password ') " ;

$res = mysqli_query($conn,$req);


?>