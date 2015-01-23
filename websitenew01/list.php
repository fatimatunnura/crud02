<?php
$link= mysqli_connect("localhost",
    "root",
    "lict@2",
    "webcrud");
$query="SELECT * FROM users";
$result= mysqli_query($link,$query);
$row=mysqli_fetch_assoc($result);
?><!DOCTYPE html>
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
<body>
<div class="container">
    <table class="table table-bordered table-striped table hover">
        <div class="panel">
            <h2> Registered list</h2>
        </div>
        <div class="panel-body">
            <tr>
                <td> id </td>
                <td> First Name</td>
                <td> Last Name</td>
                <td> Email</td>
                <td> dob</td>
                <td>gender</td>
                <td>comment</td>
                <td>created</td>
                <td>Modified</td>
                <td>Action</td>
            </tr>
            <?php
            foreach($result as $row) {
                ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['fname']?></td>
                    <td><?php echo $row['lname']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['dob']?></td>
                    <td><?php echo $row['gender']?></td>
                    <td><?php echo $row['comment']?></td>
                    <td><?php echo $row['created']?></td>
                    <td><?php echo $row['modified']?></td>
                    <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                        <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |
                        <a href="view.php?id=<?php echo $row['id']?>">View</a></td>
                </tr>
            <?php
            }
            ?>
    </table>
    <a href="dashboard.php">HOME</a>
</div>
</div>
</body>