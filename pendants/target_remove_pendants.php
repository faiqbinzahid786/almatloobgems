<?php

//html header file (linking styles sheets, JVScript and Bootstrap 4
include '../header.html';

$ID = $_POST['ID'];

//phpinfo() external file;
include '../db_connect.php';
$sql = "DELETE from pendants WHERE ID = '$ID';";
$result = $conn->query($sql);
$return_arr = array();
	header("Location: pendants.php");

?>
