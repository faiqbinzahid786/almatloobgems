<?php

//html header file (linking styles sheets, JVScript and Bootstrap 4
include '../header.html';

//title of the page
echo "<head><title>Edit Dishes</title></head>";

//navbar external file
include 'navbar_earing.html';


//phpinfo() external file;
include '../db_connect.php';

//Form asking for editing
echo "<div class='container'><br><h1>Edit existing dish:</h1>";
echo "<form action='target_edit_earrings.php' method='post'>

	Earring to edit: <select name='EarringID' class='form-control' required=true><option>Please choose an option below</option>";

	$sql="SELECT ID, name, amount FROM earings";
	$result = $conn->query($sql);

	while ($row = $result->fetch_assoc()){
	  echo "<option value='".$row['ID']."'> ".$row['ID']."&nbsp;&nbsp;&nbsp;".$row['name']."&nbsp;&nbsp;&nbsp;".$row['amount']."</option>";
	}
	echo "</select> <br>

  Earring to edit: <select name='trail' class='form-control' required=true><option>Please choose an option below</option>
  <option value= 'ID'>ID</option>
  <option value= 'img'>Image</option>
  <option value= 'name'>Name</option>
  <option value= 'description'>Description</option>
  <option value= 'size'>Size</option>
  <option value= 'weight'>Weight</option>
  <option value= 'amount'>Amount</option>
  <option value= 'price'>Price</option></select>
	<br>
  Please enter: <input type='text' name='enter' class='form-control'> <br>
	<button type='submit' class='btn btn-dark form-control'>Update</button>
	</form></div>";

?>
