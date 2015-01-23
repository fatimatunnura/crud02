
<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "lict@2", "webcrud");
$query = "select * from users WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<html>
<head><link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <title></title>
</head>
<body>
<div class="container">
    <div class="panel">
        <h2>Update Form</h2></div>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>" />
        <div class="form-group">
            <label>First Name: </label>
            <input type="text" class="form-control" name="fname" value="<?php echo $row['fname'];?>" />
        </div>
        <div class="form-group">
            <label>Last Name: </label>
            <input type="text" class="form-control" name="lname" value="<?php echo $row['lname'];?>">
        </div>
        <div class="form-group">
            <label>email: </label>
            <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>" />
        </div>
        <div class="form-group">
            <label>Password: </label>
            <input type="password" class="form-control" name="password" value="<?php echo $row['password'];?>">
        </div>
        <?php
        $date=explode('-',$row['dob']);
        list($year, $month, $day)=$date;
        ?>
        <label>Date of Birth</label>
        <select class="dropdown dropdown-toggle" name="year">
            <option <?php if ($year == "2013") echo 'selected'; ?> value="2013">2013</option>
            <option <?php if ($year == "2012") echo 'selected'; ?> value="2012">2012</option>
            <option <?php if ($year == "2011") echo 'selected'; ?> value="2011">2011</option>
            <option <?php if ($year == "2010") echo 'selected'; ?> value="2010">2010</option>
            <option <?php if ($year == "2009") echo 'selected'; ?> value="2009">2009</option>
            <option <?php if ($year == "2008") echo 'selected'; ?> value="2008">2008</option>
            <option <?php if ($year == "2007") echo 'selected'; ?> value="2007">2007</option>
            <option <?php if ($year == "2006") echo 'selected'; ?> value="2006">2006</option>
            <option <?php if ($year == "2005") echo 'selected'; ?> value="2005">2005</option>
            <option <?php if ($year == "2004") echo 'selected'; ?> value="2004">2004</option>
            <option <?php if ($year == "2003") echo 'selected'; ?> value="2003">2003</option>
            <option <?php if ($year == "2002") echo 'selected'; ?> value="2002">2002</option>
            <option <?php if ($year == "2001") echo 'selected'; ?> value="2001">2001</option>
        </select>
        <select class="dropdown dropdown-toggle" name="month">
            <option <?php if ($month == "01") echo 'selected'; ?> value="01">jan</option>
            <option <?php if ($month == "01") echo 'selected'; ?> value="02">jan</option>
            <option <?php if ($month == "03") echo 'selected'; ?> value="03">jan</option>
            <option <?php if ($month == "04") echo 'selected'; ?> value="04">jan</option>
            <option <?php if ($month == "05") echo 'selected'; ?> value="05">jan</option>
            <option <?php if ($month == "06") echo 'selected'; ?> value="06">jan</option>
            <option <?php if ($month == "07") echo 'selected'; ?> value="07">jan</option>
            <option <?php if ($month == "08") echo 'selected'; ?> value="08">jan</option>
            <option <?php if ($month == "09") echo 'selected'; ?> value="09">jan</option>
            <option <?php if ($month == "10") echo 'selected'; ?> value="10">jan</option>
            <option <?php if ($month == "11") echo 'selected'; ?> value="11">jan</option>
            <option <?php if ($month == "12") echo 'selected'; ?> value="12">jan</option>
        </select>
        <select class="dropdown dropdown-toggle "name="day">
            <option <?php if ($day == "01") echo 'selected'; ?> value="01">01</option>
            <option <?php if ($day == "01") echo 'selected'; ?> value="02">02</option>
            <option <?php if ($day == "03") echo 'selected'; ?> value="03">03</option>
            <option <?php if ($day == "04") echo 'selected'; ?> value="04">04</option>
            <option <?php if ($day == "05") echo 'selected'; ?> value="05">05</option>
            <option <?php if ($day == "06") echo 'selected'; ?> value="06">06</option>
            <option <?php if ($day == "07") echo 'selected'; ?> value="07">07</option>
            <option <?php if ($day == "08") echo 'selected'; ?> value="08">08</option>
            <option <?php if ($day == "09") echo 'selected'; ?> value="09">09</option>
            <option <?php if ($day == "10") echo 'selected'; ?> value="10">10</option>
            <option <?php if ($day == "11") echo 'selected'; ?> value="11">11</option>
            <option <?php if ($day == "12") echo 'selected'; ?> value="12">12 </option>
        </select>
        <div class="form-group"
        <label>gender</label>
        <input type="radio" name="gender" value="male" checked>male
        <input type="radio" name="gender" value="female">female
</div>
<div class="form-group">
    <label>Comment</label>
    <textarea name="comment" rows="5" cols="40"><?php echo ['comment'];?></textarea>
</div>
<button type="submit">Update</button>
</form>
</div>
</body>
</html>