<?php

//html header file (linking styles sheets, JVScript and Bootstrap 4
include '../header.html';

$trail = $_POST['trail'];
$enter = $_POST['enter'];
$RingID = $_POST['RingID'];

//phpinfo() external file;
include '../db_connect.php';
$sql = "UPDATE rings SET $trail = '$enter' WHERE ID = '$RingID';";
$result = $conn->query($sql);
$return_arr = array();

header("Location: rings.php");
?>
