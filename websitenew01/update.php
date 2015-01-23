<?php
//print_r($_POST);
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$comment=$_POST['comment'];
$link=mysqli_connect("localhost",
    "root",
    "lict@2",
    "webcrud");
$query="UPDATE `webcrud`.`users` SET `fname` = '$fname',`lname`='$lname', `email` = '$email',`password`='$password', `comment` = '$comment', `modified` = NOW() WHERE `users`.`id` = $id;";
print_r($query);
mysqli_query($link,$query);
header('location:list.php');
?>
