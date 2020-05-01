<?php

//html header file (linking styles sheets, JVScript and Bootstrap 4
include '../header.html';

$trail = $_POST['trail'];
$enter = $_POST['enter'];
$PendantsID = $_POST['PendantsID'];

//phpinfo() external file;
include '../db_connect.php';
$sql = "UPDATE pendants SET $trail = '$enter' WHERE ID = '$PendantsID';";
$result = $conn->query($sql);
$return_arr = array();

header("Location: pendants.php");
?>
