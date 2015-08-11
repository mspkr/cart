<!DOCTYPE html>
<html>
<head>
<title>loading...</title>
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
// define variables and set to empty values
$name = $email ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$Username="root";	
        $Password="54321";
        $Server = "localhost";
	$database ="cart";
	$connect = mysqli_connect($Server, $Username, $Password,$database);
	
	if(!$connect){
		die("Connection failed:" .mysqli_connect_error());
	}
	$name = $_POST['name'];
	$pwd = $_POST['pwd1'];
	$sql="INSERT INTO login (username,password) VALUES ('$name','$pwd')";
	if(mysqli_query($connect,$sql)){
		echo "";
		echo "<br>";
	}
	mysqli_close($connect);
	header('Refresh:3 ;url=home.php');
}	
?>
<div class="centered"><center><img src="333.GIF"></center><br><center><img src="500.GIF"><center></div>
</body>
</html>
