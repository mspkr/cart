<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="icon.jpeg" />
    <title>adding to cart</title>
</head>
<body  background="bg.png">
	<center><h1>pendrive 1<h1></center>
	<center><?php
	  if(isset($_POST['submit']))
	  {
		$username="root";
		$servername="localhost";
		$password="54321";
                $database="cart";
		$connect=mysql_connect($servername,$username,$password,$database);
		if(!$connect){
			echo "Error not connected to the server";
			header('Refresh:3 ;url=home.php');
		}
		$quan=$_POST['quan'];
		echo "Your Product quantity is ".$quan."<br>";
		$name="pendrive 2";
		$price=100000;
		$_SESSION['each']= $quan * $price;
		$u=$_SESSION['name'];
		$total=$_SESSION['each'];
		echo $total."<br>";
		$sql ="INSERT INTO `cart`.cart (User,Name,Quantity,Price,Total) VALUES ('$u','$name','$quan','$price','$total')";
                if (!mysql_query($sql)) {
                      echo "Your item didn't add to the cart";
                      header('Refresh:2 ;url=home.php');
                } 
                else {
                      echo "Inserted successfully";
                      header('Refresh:3 ;url=home.php');
                  }
	}	
	?>
		 <a href='home.php'>Continue shopping</a>
</center>
</body>
</html>