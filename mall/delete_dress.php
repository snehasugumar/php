<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$pid = $_GET['pid'];

//deleting the row from table
$result = mysql_query("DELETE FROM products6 WHERE pid=$pid");

//redirecting to the display page (index.php in our case)
header("Location:view_dress.php");
?>

