<?php
$id= $_GET['id'];
$link= mysqli_connect("localhost",
    "root",
    "lict@2",
    "webcrud");
$query="DELETE FROM `webcrud`.`users` WHERE `users`.`id` = $id";
mysqli_query($link,$query);
header('location:list.php');
?>