<?php

//html header file (linking styles sheets, JVScript and Bootstrap 4
include '../header.html';

$ID = $_POST['ID'];
//$dishName = $_POST['dishName'];
//$ingred = $_POST['ingred'];
//$price = $_POST['price'];

//phpinfo() external file;
include '../db_connect.php';
$sql = "DELETE from earings WHERE ID = '$ID';";
$result = $conn->query($sql);
$return_arr = array();
	header("Location: earings.php");

?>
