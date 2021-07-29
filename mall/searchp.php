<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>customercare</title>
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="stylesheet" href="styles.css" />
<link rel="stylesheet" href="styles1.css" />
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="main-texture">
  <div class="tail"> 
    <!--==============================header=================================-->
        <header>
            <div class="header">
                <div class="main">
                    <h1><a href="#" class="logo">Customer Care</a></h1>                   
                </div>
            </div>
        </header>
        <div class="bg">
            <div class="nav">
                <nav>
                    <div class="menu_1">
                        <div class="menu">
                            <ul class="my_menu">
                                <li class="current"><a href="index.html">About us</a></li>
                                <li><a href="create_product1.php">Schedule</a></li>
                                <li><a href="get_all_products.php">get pro</a></li>
                                <li><a href="search.php">Search</a></li>
                                <li><a href="create_product.php">Complaints</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                </nav>
            </div></div>
			
	  <!--==============================Slider=================================-->
	

	
	
	  
	  </div>
      <!--==============================content================================-->
     <section id="content">
              
	 <div class="admin1">
	 
	  <?php
		 $response = array();


// include db connect class
require_once 'db_connect.php';

// connecting to db
$db = new DB_CONNECT();

		 
		 if(isset($_POST['searchbtn']))
		 {
			 $searchProduct=$_POST["searchtxt"];
			 $test="name like '%$searchProduct%'";
		 } else {
			$test = ""; 
		 }
		 
		 $result=mysql_query("SELECT * FROM products2 where $test");
		  //$mdValue = 3;?>
		  
		  
	     <tr height="300"><?php
		
         while($row = mysql_fetch_array($result))
          {	?>
		   <td width="200">
		    <?=$row['name']?>
           <?=$row['price']?>
		    <?=$row['description']?>
			  <?=$row['created_at']?>
		   
          </td>
		   <?php
		  
					  }
					  
					   

    
		  ?>
		  

			   
</div>
   <div class="android1">
 </div>
  
 </section>
    </div>
  </div>

<!--==============================footer=================================-->
<footer>

</footer>
</body>
</html>