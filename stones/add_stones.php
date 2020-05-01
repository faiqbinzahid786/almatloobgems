<?php

//html header file (linking styles sheets, JVScript and Bootstrap 4
include '../header.html';

//phpinfo() external file;
include '../db_connect.php';

//navbar external file
include 'navbar_stones.html';

//form for inserting data into the pendant table
echo "<div class='container'><br><h1>Add stones details:</h1>";
echo "<form action='target_stones.php' method='POST'>
<br>
ID: <input type='number' name='ID' class='form-control' required=true> <br>
Type of stone: <input type='text' name='typeofstone' class='form-control'> <br>
Size of the stone: <input type='text' name='size' class='form-control'> <br>
Available in stock: <input type='text' name='stock' class='form-control'> <br>
Price: <input type='number' name='price' class='form-control'> <br>
Shape: <input type='text' name='shape' class='form-control'> <br><br>
<button type='submit' class='btn btn-dark form-control'>Add to stock</button>
</form></div>";

//close the connection - to prevent server overflow
$conn->close();
?>
