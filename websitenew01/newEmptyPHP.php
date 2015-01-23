<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "facebook");
$query = "select * from users WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<table border="1" width="60%" align="center" >
    <tr>
        <td>Field Name</td>
        <td>Description</td>
    </tr>
    <?php
    foreach($result as $row) {
    ?>
    <tr>
        <td>Name</td>
        <td><?php echo $row['firstname'] ?></td>
    </tr>
    <tr>
        <td>lastname</td>
        <td><?php echo $row['lastname'] ?></td>
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