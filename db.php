<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "gtech";


$con = mysqli_connect($server, $user, $password, $db);

if (!$con) {
    die("unable to connect to database" . mysqli_connect_error());
}
else {
    // echo "database connected successfully";
}











?>