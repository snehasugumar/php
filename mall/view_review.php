<?php
//including the database connection file
$response = array();


// include db connect class
require_once 'db_connect.php';

// connecting to db
$db = new DB_CONNECT();

//fetching data in descending order (lastest entry first)
$result = mysql_query("SELECT * FROM products ORDER BY pid DESC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>


<a href="Logout.php">Logout</a>
<a href="menu.php">Home</a>
<br/><br/>
<h1>View Review Details</h1>
	<table width='100%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>name</td>
		<td>price</td>
		<td>description</td>
		<td>star</td>
		
		
		
		
	</tr>
	<?php 
	while($res = mysql_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['price']."</td>";	
		echo "<td>".$res['description']."</td>";
		
		echo "<td>".$res['star']."</td>";
		
	
		
	}
	?>
	</table>
</body>
</html>
