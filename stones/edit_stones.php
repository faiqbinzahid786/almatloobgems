<?php

//html header file (linking styles sheets, JVScript and Bootstrap 4
include '../header.html';

//title of the page
echo "<head><title>Edit Stones</title></head>";

//navbar external file
include 'navbar_stones.html';


//phpinfo() external file;
include '../db_connect.php';

//Form asking for editing
echo "<div class='container'><br><h1>Edit existing stones:</h1>";
echo "<form action='target_edit_stones.php' method='post'>

	Earring to edit: <select name='StoneID' class='form-control' required=true><option>Please choose an option below</option>";

	$sql="SELECT ID, type, amount FROM stones";
	$result = $conn->query($sql);

	while ($row = $result->fetch_assoc()){
	  echo "<option value='".$row['ID']."'> G".$row['ID']."&nbsp;&nbsp;&nbsp;".$row['type']."&nbsp;&nbsp;&nbsp;".$row['amount']."</option>";
	}
	echo "</select> <br>

  Earring to edit: <select name='trail' class='form-control' required=true><option>Please choose an option below</option>
  <option value= 'ID'>ID</option>
  <option value= 'type'>Type</option>
  <option value= 'size'>Size</option>
  <option value= 'amount'>Quantity</option>
  <option value= 'price'>Price</option>
  <option value= 'shape'>Shape</option></select>
	<br>
  Please enter: <input type='text' name='enter' class='form-control'> <br>
	<button type='submit' class='btn btn-dark form-control'>Update</button>
	</form></div>";

?>
