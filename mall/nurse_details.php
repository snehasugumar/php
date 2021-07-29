<?php
		 $response = array();


// include db connect class
require_once 'db_connect.php';

// connecting to db
$db = new DB_CONNECT();
$userResult = mysql_fetch_assoc(mysql_query("SELECT * FROM products4 where name='".$_GET['usernam'] ."'"));
$price1 = mysql_fetch_assoc(mysql_query("SELECT * FROM products4 where price='".$_GET['pric'] ."'"));
$usermob = mysql_fetch_assoc(mysql_query("SELECT * FROM products4 where description='".$_GET['desc'] ."'"));
$medicine1 = mysql_fetch_assoc(mysql_query("SELECT * FROM products4 where medicine='".$_GET['medi'] ."'"));
$tablet1 = mysql_fetch_assoc(mysql_query("SELECT * FROM products4 where tablet='".$_GET['tab'] ."'"));
//$date1 = mysql_fetch_assoc(mysql_query("SELECT * FROM products4 where date='".$_GET['dat'] ."'"));
//$injection1 = mysql_fetch_assoc(mysql_query("SELECT * FROM products4 where injection='".$_GET['injec'] ."'"));
?>
<form action="" method="post" class="logm">
 <div id="divHeader" class="divHeaderTable">
        <h4>Employee Details</h4>
    </div>
  
 <div id="content" class="divTable">
       <div class="divRow">
        <div class="divColumn">
           
			
            <div>
                <input type="text" name="name"  value="<?= $userResult['name'] ?>">
            </div>
        </div>
		</div>
		 <div class="divRow">
        <div class="divColumn">
          
            <div class="col">
                <input type="text" name="price"  value="<?= $price1['price'] ?>">
            </div>
        </div>
		</div>
		 <div class="divRow">
        <div class="divColumn">
          
            <div class="col">
                <input type="text" name="description"  value="<?= $usermob['description'] ?>">
            </div>
        </div>
		</div>
		 <div class="divRow">
        <div class="divColumn">
           
            <div>
              <input type="text" name="medicine"  value="<?= $medicine1['medicine'] ?>">
            </div>
        </div>
        </div>
		 <div class="divRow">
        <div class="divColumn">
           
            <div>
              <input type="text" name="medicine"  value="<?= $tablet1['tablet'] ?>">
            </div>
        </div>
        </div>
		 
		 
		 <div class="divRow">
        <div class="divColumn">
           <div>
            <a href="get_nurse.php">Checked</a>
            </div>
           
        </div>
        </div>
          
        </div>
		</div>