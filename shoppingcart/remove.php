<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
 <link rel="icon" type="image/png" href="icon.jpeg" />
 <title>removing</title>
 <style>
 .centered {
  position: fixed;
  top: 50%;
  left: 50%;
  margin-top: -50px;
  margin-left: -100px;
        }
        
</style>
</head>
<body  background="bg.png">

        <?php
          		$username="root";
			$servername="localhost";
			$password="54321";
                	$database="cart";
			$conn=mysql_connect($servername, $username, $password, $database);	
			if(!$conn){
					echo "Not connected";			
			}
			$name= $_SESSION['name'];
        if(isset($_POST['submit'])){
					$item=$_POST['item'];
					$sql="DELETE FROM `cart`.cart WHERE User='$name' AND Name='$item'";
					$query=mysql_query($sql);
					if($query) {
								echo "<center>Item successfully removed<center>";		
								header('Refresh:1 ;url=cart.php');;
					}
					else {
								echo "<center>Error</center>";
								header('Refresh:2 ;url=cart.php');
					}        
        }
        ?>
        <div class="centered"><center><img src="335.GIF"></center></div>
</body>
</html>
