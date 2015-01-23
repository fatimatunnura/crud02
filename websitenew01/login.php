<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Fatima</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>
<html>
<body>
<div class="container">
    <section id="forms">
        <div class="panel"> <h1> LOG IN </h1></div>
        <form class="well form-search"action="checkuser.php" method="post">
            <div class="form-group">
                <label>email</label>
                <input type="text" name="email">
            </div>
            <?php
            session_start();
            ?>
            <?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?>
            <br>
            <div class="form-group">
                <label> Password </label>
                <input type="password" name="password">
            </div>
            <?php if(isset($_SESSION['password'])) echo $_SESSION['password']; ?>
            <?php if(isset($_SESSION['msg'])) echo $_SESSION['msg']; ?>
            <?php session_unset();?>
            <br>
            <button type="submit"class="btn"> Log in</button>

            <a href="create.php"> Registration</a>
        </form>
    </section>
</div>
</body>
</html>