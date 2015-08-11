<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
 <link rel="icon" type="image/png" href="icon.jpeg" />
	<title>login</title>
	<style>
	body {
      background-color: #f4f4f4;
      color: #5a5656;
      font-family: 'Open Sans', Arial, Helvetica, sans-serif;
      font-size: 16px;
      line-height: 1.5em;
            }
       .centered {
  position: fixed;
  top: 50%;
  left: 50%;
  margin-top: -50px;
  margin-left: -100px;
}
	</style>
</head>
<body background="bg.png">
	<?php
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$username="root";	
			$password="54321";
			$server = "localhost";
			$connect = mysql_connect($server,$username,$password);
			
			if(!connect){
				echo "Connection failed";
			}
			$db=mysql_select_db("cart",$connect);
			$mail=$_POST['name'];
			$pwd=$_POST['pass'];								
			$sqlQuery = "SELECT * FROM login WHERE username='$mail' AND password= '$pwd'";
			$sql = mysql_query( $sqlQuery, $connect );
			$rows=mysql_num_rows($sql);
			if($rows > 0){
				$_SESSION['name']=$mail;
				header('Refresh:2 ;url=home.php');
			}
			else{
				echo "Login fail";
			
			header('Refresh:3 ;url=login.html');
			}
			mysql_close($connect);
			
		}
	?>
	<div class="centered"><center><img src="332.GIF"></center><br><center><img src="500.GIF"><center></div>
</body>
</html>
