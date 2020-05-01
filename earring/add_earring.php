<?php

//html header file (linking styles sheets, JVScript and Bootstrap 4
include '../header.html';

//phpinfo() external file;
include '../db_connect.php';

//navbar external file
include 'navbar_earing.html';

//form for inserting data into the pendant table
echo "<div class='container'><br><h1>Add earring details:</h1>";
echo "<form action='target_earring.php' method='POST'>
<br>
ID: <input type='text' name='ID' class='form-control' required=true> <br>
Image URL: <input type='text' name='imageURL' placeholder='../pictures/imagefilename.jpg' class='form-control'> <br>
Name: <input type='text' name='eName' class='form-control'> <br>
Description: <input type='text' name='description' class='form-control'> <br>
Size: <input type='text' name='size' class='form-control'> <br>
Weight: <input type='number' name='weight' class='form-control'> <br>
Available in stock: <input type='number' name='amount' class='form-control'> <br>
Price: <input type='number' name='price' class='form-control'> <br><br>
<button type='submit' class='btn btn-dark form-control'>Add to stock</button>
</form></div>";

//close the connection - to prevent server overflow
$conn->close();
?>
