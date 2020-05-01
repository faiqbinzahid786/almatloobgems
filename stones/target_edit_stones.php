<?php

//html header file (linking styles sheets, JVScript and Bootstrap 4
include '../header.html';

$trail = $_POST['trail'];
$enter = $_POST['enter'];
$StoneID = $_POST['StoneID'];

//phpinfo() external file;
include '../db_connect.php';
$sql = "UPDATE stones SET $trail = '$enter' WHERE ID = '$StoneID';";
$result = $conn->query($sql);
$return_arr = array();

header("Location: stones.php");
?>
