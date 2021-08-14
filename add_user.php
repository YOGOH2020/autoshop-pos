<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD USER</title>
    <title>login</title>
    <link rel="icon" href="images/logo1.jpg">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="js.js"></script>
    <script src="bootstrap/js/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="logo">
    <img src="images/logo.jpg" alt="Logo" width="150" height="150">
</div>
<div class="heading" id="add">
    <h2 class="text-center">Success</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <?php

            $conn=mysqli_connect("localhost","root","","auto");
            if (!$conn)
            {
                die("Connection Failed : " . mysqli_connect_error());
            }
            $sql="insert into user (first_name,last_name,email,phone_number,username,p_word,user_group)
values ('$_POST[fName]','$_POST[lName]','$_POST[mail]','$_POST[pNumber]','$_POST[uName]','$_POST[pWord]','$_POST[users]')";


            if($conn->query($sql) == true)
            {
                print "<p>New User Added Successfully.</p>";
                print "<a href='register_user.php' class='btn btn-outline-primary'>Add New</a>";
                print " &nbsp;<a href='index.php' class='btn btn-outline-primary'>Login</a>";



            }
            else
            {
                print "User not added.";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>
