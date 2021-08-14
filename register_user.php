<?php include('process.php'); ?>
<html>
<head>
    <title>Register User</title>
    <link rel="icon" href="images/logo.jpg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="js.js"></script>
    <script src="bootstrap/js/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="logo">
    <img src="images/logo.jpg" alt="Logo" width="150" height="150">
</div>
<div class="heading" id="reg">
    <h2 class="text-center">Register</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="add_user.php" method="post">
                <br>
                <input type="text" name="fName" class="form-control" placeholder="* First Name" required>
                <br>
                <input type="text" name="lName" class="form-control" placeholder="* Last Name" required>
                <br>
                <input type="email" name="mail" class="form-control" placeholder="* Email" required>
                <br>
                <input type="number" name="pNumber" class="form-control" placeholder="* Phone Number" required>
                <br>
                <input type="text" name="uName" class="form-control" placeholder="* Username" required>
                <br>
                <input type="password" name="pWord" class="form-control" placeholder="* Password" required>
                <br>
                <select name="users"  class="form-control" required>
                    <option value="">Select User</option>
                    <option value="Staff">Staff</option>
                    <option value=" User"> User</option>
                    <option value="Admin">Admin</option>
                </select>
                <div class="buttons">
                    <button class="btn btn-primary" type="submit">Register</button>

                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>


