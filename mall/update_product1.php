<?php

/*
 * Following code will update a product information
 * A product is identified by product id (pid)
 */

// array for JSON response
$response = array();

// check for required fields
if (isset($_POST['pid']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['description'])  && isset($_POST['medicine']) && isset($_POST['date']) && isset($_POST['injection']) && isset($_POST['tablet']) ) {
    
    $pid = $_POST['pid'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
	 $medicine = $_POST['medicine'];
	 $date = $_POST['date'];
	 $injection = $_POST['injection'];
	 $tablet = $_POST['tablet'];

    // include db connect class
    require_once 'db_connect.php';

    // connecting to db
    $db = new DB_CONNECT();

    // mysql update row with matched pid
    $result = mysql_query("UPDATE products4 SET name = '$name', price = '$price', description = '$description', medicine = '$medicine' , date = '$date' , injection = '$injection' , tablet = '$tablet' WHERE pid = $pid");

    // check if row inserted or not
    if ($result) {
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "Product successfully updated.";
        
        // echoing JSON response
        echo json_encode($response);
    } else {
        
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";

    // echoing JSON response
    echo json_encode($response);
}
?>
