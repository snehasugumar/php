
	  <!--==============================Slider=================================-->
	<?php

/*
 * Following code will create a new product row
 * All product details are read from HTTP Post Request
 */

// array for JSON response
$response = array();

// check for required fields
if  (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['description'])&& isset($_POST['medicine']) && isset($_POST['date'])&& isset($_POST['injection'])&& isset($_POST['tablet'])) {
    
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

    // mysql inserting a new row
    $result = mysql_query("INSERT INTO products4(name, price, description,medicine,date,injection,tablet) VALUES('$name', '$price', '$description','$medicine','$date','$injection','$tablet')");

    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        //$response["success"] = 1;
        //$response["message"] = "Product successfully created.";

        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
       // $response["success"] = 0;
      //  $response["message"] = "Oops! An error occurred.";
        
        // echoing JSON response
        echo json_encode($response);
    }
} else {
    // required field is missing
   // $response["success"] = 0;
//    $response["message"] = "Required field(s) is missing";

    // echoing JSON response
    echo json_encode($response);
}
?>


	
	
	  
	
      <!--==============================content================================-->
     <section id="content">
              
	 <div class="admin1">
<form action="" method="post" class="logm">
 <div id="divHeader" class="divHeaderTable">
        <h4>Schedule for Nurse</h4>
    </div>
  
 <div class="divTable">
       <div class="divRow">
        <div class="divColumn">
            <div>
                <label class="lab" for="name">Nurse Name</label>
            </div>
			
            <div>
                <input type="text" id="txtname" name="name" />
            </div>
        </div>
		</div>
		 <div class="divRow">
        <div class="divColumn">
            <div>
                <label class="lab" for="price">Patient Name</label>
            </div>
			
            <div>
                <input type="text" id="txtname" name="price" />
            </div>
        </div>
		</div>
		<div class="divRow">
        <div class="divColumn">
            <div>
                <label class="lab" for="description">ward No.</label>
            </div>
			
            <div>
                <input type="text" id="txtname" name="description" />
            </div>
        </div>
		</div>
		<div class="divRow">
        <div class="divColumn">
            <div>
                <label class="lab" for="medicine">medicine.</label>
            </div>
			
            <div>
                <input type="text" id="txtname" placeholder="pending" name="medicine" />
            </div>
        </div>
		</div>
		<div class="divRow">
        <div class="divColumn">
            <div>
                <label class="lab" for="date">Date</label>
            </div>
			
            <div>
                <input type="text" id="txtname" name="date" />
            </div>
        </div>
		</div>
		<div class="divRow">
        <div class="divColumn">
            <div>
                <label class="lab" for="injection">Injection</label>
            </div>
			
            <div>
                <input type="text" id="txtname" name="injection" />
            </div>
        </div>
		</div>
		
		 <div class="divRow">
        <div class="divColumn">
            <div>
                <label class="lab" for="tablet" >Tablet Name</label>
            </div>
            <div>
                <input type="text" name="tablet" id="Text1" />
            </div>
        </div>
		</div>
		
      <div class="divRow">
	  <div class="divcolumn">
         <input type="submit" value="Submit" />
        </div>
      </div>
    </div>
	</div>
 </div>   
</form>
			   
</div>
   <div class="android1">
 </div>
  
 </section>
    </div>
  </div>

<!--==============================footer=================================-->
<footer> Company Name Here &copy; 2013 <br />
<!-- Do not remove -->Design by <a href="http://www.metamorphozis.com/free_templates/free_templates.php" title="Free Website Templates">Free Website Templates</a><!-- end -->
</footer>
</body>
</html>