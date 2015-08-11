<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
 <link rel="icon" type="image/png" href="icon.jpeg" />
         
	<title>cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
	<style>
			.container{
						margin:auto;
						padding:30px;
						text-align:center;
						font-size: 14px;
						font-family: monospace;
						width:500px;
			}
			.Header{
						text-align: center;	
						font-size: 40px;
						text-shadow:1px 1px 2px #FF0000,2px 2px 3px #0000FF;
								
			}
        </style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<?php include 'heading.php';?>
<body background="bg.png">
<!-- Navigational bar -->  
  <nav class="navbar navbar-default">
    <div>
      <ul class="nav navbar-nav">
        <li><a href=home.php>Home</a></li>
        <li><a href="laptop.php">Laptops</a></li>
        <li><a href="desktop.php">Desktops</a></li>
        <li><a href="pendrive.php">Pendrives</a></li>
        <li><a href="printer.php">Printers</a></li>
         <ul class="nav navbar-nav navbar-center">
                <li><a><?php echo "Welcome  ". $_SESSION['name']; ?></a></li>
         </ul>
      </ul>
        </li>
        <ul class="nav navbar-nav navbar-right">
        <ul class="nav navbar-nav navbar-right">
        	<li  class="active"><a href="cart.php"><span class="glyphicons glyphicons-shopping-cart"></span>Your Cart</a></li>
        	<li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
        </ul>
     </ul>   
    </div>    
  </nav>
		<?php
			$username="root";
			$password="54321";
			$servername="localhost";
			$database="cart";
			$conn=mysql_connect($servername, $username, $password, $database);	
			if(!$conn){
					echo "Not connected";			
			}
			$name= $_SESSION['name'];
			$sql="SELECT * FROM `cart`.cart WHERE User = '$name'";
			$query=mysql_query($sql);
			echo "<h1 class='Header'>Your cart</h1>";
			echo"<div class='container'>";
			echo "<fieldset>";
			echo "<table>"; 
			echo "<tr><td><strong>&nbsp&nbsp&nbspItem name&nbsp&nbsp&nbsp</strong></td><td><strong>&nbsp&nbsp&nbspQuantity&nbsp&nbsp&nbsp&nbsp</strong></td><td><strong>&nbsp&nbsp&nbspPrice&nbsp&nbsp&nbsp</strong></td><td><strong>&nbsp&nbsp&nbspTotal&nbsp&nbsp</strong></td>";
	while($row = mysql_fetch_array($query)){   
		echo "<tr><td>" . $row['Name'] . "</td><td>" . $row['Quantity'] ."     ". "</td><td>" . $row['Price'] . "</td><td>" . $row['Total'] . "</td></tr>";  
	}
	                 
			echo "</table>";
			echo "</fieldset>";
			echo "</div>"; 	
	
		?>
		      <br><br>
			<center><form method="post" action="remove.php">Enter name of item to remove :<input type="text" name="item"><br><input type="submit" name="submit" value="Remove"></form><center>
			<br><br>
			<center><a href='home.php'>Continue shopping</a></center>
</body>
<script>
			$(function () {
				$('.link').onclick(function () {
						$_SESSION['item']="hi";
				});
			});
</script>
</html>

