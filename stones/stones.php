<?php

//html header file (linking styles sheets, JVScript and Bootstrap 4
include '../header.html';

//title of the page
echo "<head><title>Gemstones</title></head>";

//phpinfo() external file;
include '../db_connect.php';

//navbar external file
include 'navbar_stones.html';

//SQL Query to display content from database
$sql = "SELECT * FROM stones";;

$result = $conn->query($sql);
$return_arr = array();


//Heading for Projects
echo "<div class='container-fluidser'>
<form id='menu' style= 'display:none'>
<input type='text'></form>
<div class = 'NonPrintable'><br></div>
<h1 style='margin-left: 66px'><b>Gemstones</b></h1><br></div>";


//echo"<div class = 'NonPrintable'><br></div>
//<center><br>
//<h1><b>Gemstones</b></h1><br><br></center></div>";

//Table that display the tuples and attributes from Project Table
echo "<div class='container'>
<table class='table table-hover'>
    <thead>
      <tr>
        <th>ID</th>
        <th>Type of stone</th>
        <th>Size of the stone</th>
        <th>Available in stock</th>
        <th>Price</th>
        <th>Shape</th>";

while($row = $result->fetch_assoc())
{
  echo "<tr><td>";

  echo "G";
  echo $row["ID"];
  echo "</td><td>";

  echo $row['type'];
  echo "</td><td>";

  echo $row['size'];
  echo " cm";
  echo "</td><td>";

  echo $row['amount'];
  echo " pcs";
  echo "</td><td>";

  echo "$";
  echo $row['price'];
  echo "</td><td>";

  echo $row['shape'];
  echo"</td></tr></div>";

}


//printing button
echo"
</table>
<input class='btn btn-dark form-control' id='printpagebutton' type='button' value='Print this page' onclick='printpage()'/>
<script type='text/javascript'>
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById('printpagebutton');

		//Set the print button visibility to 'hidden'
        printButton.style.visibility = 'hidden';

	   //Print the page content
        window.print()

	   //Set the print button to 'visible' again
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
    }
</script>

<br><br>";
?>
