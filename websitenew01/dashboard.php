<?php
if(($_SERVER['REQUEST_METHOD']) == "POST"){
    header('location:login.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>
<h1>Dashboard</h1>
<body>
<div class="container">
    <div class="panel">
        <h1>Dashboard</h1>
    </div>
    <div class="panel panel-body">
        <?php
        session_start();
        if(isset($_SESSION['email'])){
            echo "Hello " . $_SESSION['fname'] . "<br>";
            echo "Your email is " .$_SESSION['email']. "<br>";
        }
        else{
            header("location:index.html");
        }
        ?>
    </div>
    <div class="panel panel-body">
        <div class="link"><a href="list.php">List ||</a>
            <a href="logout.php">
                logout</a>
        </div>
    </div>
</div>
</body>
</html>