<?php

//html header file (linking styles sheets, JVScript and Bootstrap 4
include '../header.html';

$trail = $_POST['trail'];
$enter = $_POST['enter'];
$EarringID = $_POST['EarringID'];

//phpinfo() external file;
include '../db_connect.php';
$sql = "UPDATE earings SET $trail = '$enter' WHERE ID = '$EarringID';";
$result = $conn->query($sql);
$return_arr = array();

header("Location: earings.php");
?>
