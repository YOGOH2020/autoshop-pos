<?php
$db = mysqli_connect('localhost', 'root', '','auto');
if (!$db){
    die("Database db Failed" . mysqli_error($db));
}
$select_db = mysqli_select_db($db, 'auto');
if (!$select_db) {
    die("Database Selection Failed" . mysqli_error($db));
}

