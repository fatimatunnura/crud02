<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
if(($_SERVER['REQUEST_METHOD'])=="GET"){
    header('location:login.php');
} elseif (isset($email) && (empty($email))) {
    $_SESSION['email']='inavalid email';
    header('location:login.php');
}
elseif(isset($_POST['password']) && (empty($_POST['password']))) {
    $_SESSION['invalidpassword']='Invalid Password';
    header('location:login.php');
}
$link=mysqli_connect("localhost","root","lict@2","webcrud");
$query="SELECT * FROM users where email = '$email' AND password = '$password'";
//Read more: http://mrbool.com/how-to-create-a-login-page-with-php-and-mysql/28656#ixzz3P9qzvPDf
//var_dump($query);
$result=mysqli_query($link,$query)or die(mysql_error("error"));
$row=mysqli_fetch_assoc($result) or die(mysql_error("error"));
//var_dump($row);
if(!empty($row['email']) AND !empty($row['password']))
{
//(SEND Data to the SESSION and GO to The Dashboard)
    $_SESSION['fname']=$row['fname'];
    $_SESSION['email']=$row['email'];
    $_SESSION['password']=$row['password'];
    header('location: dashboard.php');
}
else
{
//(Redirect to the Login page with a Message)
    $_SESSION['msg'] = "Invalid Username and/or Password. If You are not Registered User Please Complete Registration First or Contact with Administrator.";
header('location:login.php');
}