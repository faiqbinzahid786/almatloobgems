<?php

//html header file (linking styles sheets, JVScript and Bootstrap 4
include '../header.html';

//title of the page
echo "<head><title>Remove Pendant</title></head>";

//phpinfo() external file;
include '../db_connect.php';

//navbar external file
include 'navbar_pendants.html';

//
echo "<div class='container'><br><h1>Remove a pendants:</h1>";
echo "<form action='target_remove_pendants.php' method='post'>
 <br><select name='ID' class='form-control' required=true><option>Please choose an option below</option>";

$sql="SELECT ID, name, size from pendants";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()){
//  echo "<option value='".$row['ID']."'> G".$row['ID']."&nbsp;&nbsp;&nbsp;".$row['type']."&nbsp;&nbsp;&nbsp;".$row['size']."mm</option>";
  echo "<option value='".$row['ID']."'>".$row['ID']."&nbsp;&nbsp;&nbsp;".$row['name']."&nbsp;&nbsp;&nbsp;".$row['size']."</option>";

}
echo "</select> <br><br>
  <button type='submit' class='btn btn-dark form-control'>Remove</button>
</form></div>";

?>
