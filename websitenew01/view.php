
<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "webcrud");
$query = "select * from users WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
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
<body>
<div class="container">
    <div class="panel">
        <h2> Details</h2>
    </div>
    <table class="table-bordered table-striped table hover" >
        <div class="panel-body">
            <tr>
                <td>Field Name</td>
                <td>Description</td>
            </tr>
            <?php
            foreach($result as $row) {
                ?>
                <tr>
                    <td>First Name</td>
                    <td><?php echo $row['fname'] ?></td>
                </tr>
                <tr>
                    <td>lastname</td>
                    <td><?php echo $row['lname'] ?></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><?php echo $row['email'] ?></td>
                </tr>
                <tr>
                    <td>Date of birth</td>
                    <td><?php echo $row['dob'] ?></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><?php echo $row['gender'] ?></td>
                </tr>
                <tr>
                    <td>Comment</td>
                    <td><?php echo $row['comment'] ?></td>
                </tr>
            <?php
            }
            ?>
    </table>
</div>
</div>
<a href="list.php">Go to Home</a>