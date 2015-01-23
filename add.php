<?php

$firstName = $_POST['firstName'];
$lastName =$_POST['lastName'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud02");



$query = "INSERT INTO `crud02`.`student` (

`First_Name`,
`Last_Name`
)
VALUES (
     '$firstName',
     '$lastName'
);";

mysqli_query($link, $query);
echo $query;

header('location:list.php');

?>