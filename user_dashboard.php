<?php


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User </title>
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
    <img src="images/logo.jpg" alt="logo" width="100px" height="100px">
</div>
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm-9">
            <div class="container">
                <form action="" method="post" enctype="multipart/form-data">
                    <table class="table table-striped table-responsive-sm">

                        <tr>
                            <td colspan="4" class="text-center">
                                <h3> User DashBoard</h3>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-justify">
                               <h4>Please complete the form below to book an appointment <br>
                                   Will contact you to verify your booking</h4>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-justify">
                                <label for=""><b>Services</b></label>
                                <select name="services" id="services" class="form-control" required>
                                    <option value="Select">--Select--</option>
                                    <option value="Break Repair">Break Repair</option>
                                    <option value="Transmission">Transmission</option>
                                    <option value="Tune Up">Tune Up</option>
                                    <option value="Tire Rotation">Tire Rotation</option>
                                    <option value="Oil Change">Oil Change</option>
                                    <option value="Car wash">Car wash</option>
                                    <option value="Car Waxing">Car Waxing</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <label for=""><b>Full Name</b></label>
                                <br>
                                <input type="text" name="fName" class="form-control" value="" required>
                            </td>
                            <td class="text-center">
                                <label for=""><b>Phone Number</b></label>
                                <br>
                                <input type="number" name="PName" class="form-control" value="" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <label for=""><b>Preferred Date</b></label>
                                <br>
                                <input type="datetime-local" name="pDate" class="form-control" value="" required>
                            </td>
                            <td class="text-center">
                                <label for=""><b>Alternative Date</b></label>
                                <br>
                                <input type="datetime-local" name="aDate" class="form-control" value="" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <label for=""><b>Vehicle Make</b></label>
                                <br>
                                <input type="text" name="vMake" class="form-control" value="" required>
                            </td>
                            <td class="text-center">
                                <label for=""><b>Vehicle Model</b></label>
                                <br>
                                <input type="text" name="vModel" class="form-control" value="" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <label for=""><b>Reg Number</b></label>
                                <br>
                                <input type="text" name="rNum" class="form-control" value="" required>
                            </td>
                            <td class="text-center">
                                <label for=""><b>Whats App Number</b></label>
                                <br>
                                <input type="number" name="wNum" class="form-control" value="" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <label for=""><b>Other Services Not Listed</b></label>
                                <br>
                                <textarea name="other" id="other" cols="20" rows="10" class="form-control" required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center">
                                <input type="submit" name="send" value="Book" class="btn btn-success">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="logout.php" class="btn btn-outline-primary">Logout</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn btn-outline-danger">Cancel Booking</a>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="col-sm"></div>

    </div>
</div>
</div>
</body>
</html>
