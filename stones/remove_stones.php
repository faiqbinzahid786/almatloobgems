<?php

//html header file (linking styles sheets, JVScript and Bootstrap 4
include '../header.html';

//title of the page
echo "<head><title>Remove Stones</title></head>";

//phpinfo() external file;
include '../db_connect.php';

//navbar external file
include 'navbar_stones.html';

//
echo "<div class='container'><br><h1>Remove a stone:</h1>";
echo "<form action='target_remove_stones.php' method='post'>
 <br><select name='ID' class='form-control' required=true><option>Please choose an option below</option>";

$sql="SELECT ID, type, size from stones";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()){
  echo "<option value='".$row['ID']."'> G".$row['ID']."&nbsp;&nbsp;&nbsp;".$row['type']."&nbsp;&nbsp;&nbsp;".$row['size']."mm</option>";
}
echo "</select> <br>";
/*

echo "</select> <br>
  Supervisor: <select name='superssn' class='form-control' ><option></option>";

  $sql="select fname, lname,ssn from employee";
  $result = $conn->query($sql);

  while ($row = $result->fetch_assoc()){
    echo "<option value='".$row['ssn']."'>".$row['fname']." ".$row['lname']."</option>";
  }

echo " </select>
 */
echo "
  <br>
  <button type='submit' class='btn btn-dark form-control'>Remove</button>
</form></div>";

?>
