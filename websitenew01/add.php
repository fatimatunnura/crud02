<?php
//print_r($_POST);
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$dob=$_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
$gender=$_POST['gender'];
$comment=$_POST['comment'];
$link=mysqli_connect("localhost",
    "root",
    "lict@2",
    "webcrud"
);
$query="INSERT INTO `webcrud`.`users` (`id`, `fname`, `lname`, `email`,`password`,`dob`,`gender`,`comment`,`created`)
VALUES ('NULL','$firstname','$lastname','$email','$password','$dob','$gender','$comment',NOW());";
mysqli_query($link,$query);
header('location:list.php');