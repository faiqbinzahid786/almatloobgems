<?php

//html header file (linking styles sheets, JVScript and Bootstrap 4
include '../header.html';

//variables to get the contents of the for
$ID = $_POST['ID'];
$name = $_POST['eName'];
$description = $_POST['description'];
$weight = $_POST['weight'];
$size = $_POST['size'];
$stock = $_POST['amount'];
$price = $_POST['price'];
$imageURL = $_POST['imageURL'];

//phpinfo() external file;
include '../db_connect.php';
$sql = "INSERT INTO earings VALUES ('$ID', '$imageURL', '$name', '$description', '$size', '$weight', '$stock', '$price')";
$result = $conn->query($sql);
$return_arr = array();
        header("Location: earings.php");
?>
