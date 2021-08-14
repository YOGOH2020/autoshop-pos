
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <img src="images/logo.jpg" alt="logo" width="200px" height="200px">
</div>
<div class="heading">
    <h3>AUTO-MAN</h3>
    <p class="text-center">One Stop for all your auto issues</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6" id="auto">
            <form action="" method="post">
                <input type="text" name="uName" class="form-control" placeholder=" *Your User Name" required>
                <input type="password" name="pWord" class="form-control" placeholder=" *Your Password" id="myInput" required>
                &nbsp;
                <input type="checkbox" onclick="myFunction()"> &nbsp;Show Password
                &nbsp;
                <select name="group" id="group" class="form-control" required>
                    <option value="">Select User</option>
                    <option value="Users">Users</option>
                    <option value="Staff">Staff</option>
                    <option value="Admin">Admin</option>
                </select>

                <div class="buttons" >
                    <input type="submit" name="submit" value="Login" class="btn btn-primary">
                  &nbsp;
                  &nbsp;
                    <a href="register_user.php" class="btn btn-primary">Create Account</a>
                </div>

            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>

<?php
session_start();

if (isset($_POST['submit'])){
    include 'auto_connect.php';

    $username=mysqli_real_escape_string($db,$_POST['uName']);
    $password=mysqli_real_escape_string($db,$_POST['pWord']);
    $grp=mysqli_real_escape_string($db,$_POST['group']);

    $sqr=mysqli_query($db,"select * from user where username='$username' and p_word='$password' and user_group='$grp'");
}    $row=mysqli_fetch_array($sqr,MYSQLI_ASSOC);
     $active=$row['active'];

     $count=mysqli_num_rows($sqr);



     if ($count==1){
         if (!empty($username) && !empty($password) && !empty($grp=='Users')){
             header('location:user_dashboard.php');
         }
         if (!empty($username) && !empty($password) && !empty($grp=='Staff')){
             header('location:staff_dashboard.php');
         }
         if (!empty($username)  && !empty($password) && !empty($grp=='Admin')){
             header('location:admin_dashboard.php');
         }
     }
     else{
         header('location:login_error.php');
     }
