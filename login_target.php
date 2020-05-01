<?php

$username = $_POST['uname'];
$password = $_POST['psw'];

if ($username == "almatloobgems" && $password == "almatloobgems") {
      header("Location: almatloobgems.php");
    }
    else {
      header("Location: index.html");
}
?>
