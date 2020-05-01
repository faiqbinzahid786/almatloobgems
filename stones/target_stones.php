<?php

//html header file (linking styles sheets, JVScript and Bootstrap 4
include '../header.html';

//title of the page
echo "<head><title>Gemstones</title></head>";

//variables to get the contents of the for
$typeofstone = $_POST['typeofstone'];
$ID = $_POST['ID'];
$size = $_POST['size'];
$stock = $_POST['stock'];
$price = $_POST['price'];
$shape = $_POST['shape'];

//phpinfo() external file;
include '../db_connect.php';
$sql = "INSERT INTO stones VALUES ('$ID', '$typeofstone', '$size', '$stock', '$price', '$shape')";
$result = $conn->query($sql);
$return_arr = array();
        header("Location: stones.php");
?>
