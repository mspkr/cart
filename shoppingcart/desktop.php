<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
   
    <link rel="icon" type="image/png" href="icon.jpeg" />
  <title>Home </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="sk.css">
  <script src="sk.js"></script>
</head>
<body>
  <body background="bg.png">
<!-- Navigational bar -->  
  <nav class="navbar navbar-default">
    <div>
      <ul class="nav navbar-nav">
        <li><a href=home.php>Home</a></li>
        <li><a href="laptop.php">Laptops</a></li>
        <li class="active"><a href="desktop.php">Desktops</a></li>
        <li><a href="pendrive.php">Pendrives</a></li>
        <li><a href="printer.php">Printers</a></li>
         <ul class="nav navbar-nav navbar-center">
                <li><a><?php echo "Welcome  ". $_SESSION['name']; ?></a></li>
         </ul>
      </ul>
        </li>
        <ul class="nav navbar-nav navbar-right">
        <ul class="nav navbar-nav navbar-right">
        	<li><a href="cart.php"><span class="glyphicons glyphicons-shopping-cart"></span>Your Cart</a></li>
        	<li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
        </ul>
     </ul>   
    </div>    
  </nav>
  <script>
    var s;
  s=new Date();
  document.getElementById("date").innerHTML = s.toDateString();
  </script>
<div class="main">  
           <!--Desktops-->
<h1 class="jumbotron"><a href="desktop.php">Desktops</a></h1>   
 <div class="row">
                <!--desktop product 1-->
  <div class="col-md-3">
     <div class="dropdown">
        <img src="pics/desktops/1.jpeg" class="first" height="200" width="200" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:2px"> 
          <ul class="dropdown-menu">
            <li><h2 class="pj">dell</h2></li>
            <li><h3 class="pj">Rs 25,000</h3></li>
            <li><p class="pj">MRP 35,111</li>
            <li><h2 class="pj">Specifications</h2>
                  <ol>
                    <li>16gb ram</li>
                    <li>1TB Hard disk</li>
                  </ol>
           </li>      
         </ul>
         
         <form action="addcart5.php" method='post'>
		Quantity:<input type="number" max="10" min="1" name="quan" >
		<br>
		<input type="submit" name="submit" value="Buy now">		
	</form>
     </div> 
  </div>
                <!--desktop product 2-->
  <div class="col-md-3">
     <div class="dropdown">
        <img src="pics/desktops/2.jpeg" class="first" height="200" width="200" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:2px"> 
          <ul class="dropdown-menu">
            <li><h2 class="pj">dell</h2></li>
            <li><h3 class="pj">Rs 25,000</h3></li>
            <li><p class="pj">MRP 35,111</li>
            <li><h2 class="pj">Specifications</h2>
                  <ol>
                    <li>16gb ram</li>
                    <li>1TB Hard disk</li>
                  </ol>
           </li>      
         </ul>
         
         <form action="addcart6.php" method='post'>
		Quantity:<input type="number" max="10" min="1" name="quan" >
		<br>
		<input type="submit" name="submit" value="Buy now">		
	</form>
     </div> 
  </div>

                <!--desktop product 3-->
  <div class="col-md-3">
     <div class="dropdown">
        <img src="pics/desktops/3.jpeg" class="first" height="200" width="200" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:2px"> 
          <ul class="dropdown-menu">
            <li><h2 class="pj">dell</h2></li>
            <li><h3 class="pj">Rs 25,000</h3></li>
            <li><p class="pj">MRP 35,111</li>
            <li><h2 class="pj">Specifications</h2>
                  <ol>
                    <li>16gb ram</li>
                    <li>1TB Hard disk</li>
                  </ol>
           </li>      
         </ul>
         
         <form action="addcart7.php" method='post'>
		Quantity:<input type="number" max="10" min="1" name="quan" >
		<br>
		<input type="submit" name="submit" value="Buy now">		
	</form>
     </div> 
  </div>

                <!--desktop product 4-->
  <div class="col-md-3">
     <div class="dropdown">
        <img src="pics/desktops/4.jpeg" class="first" height="200" width="200" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:2px"> 
          <ul class="dropdown-menu">
            <li><h2 class="pj">dell</h2></li>
            <li><h3 class="pj">Rs 25,000</h3></li>
            <li><p class="pj">MRP 35,111</li>
            <li><h2 class="pj">Specifications</h2>
                  <ol>
                    <li>16gb ram</li>
                    <li>1TB Hard disk</li>
                  </ol>
           </li>      
         </ul>
         
         <form action="addcart8.php" method='post'>
		Quantity:<input type="number" max="10" min="1" name="quan" >
		<br>
		<input type="submit" name="submit" value="Buy now">		
	</form>
     </div> 
  </div>
</div>
</div>
</div>
<div class="footer">
  <h2 class="jumbotron"><center>@2015 Students cart | all rights reserved. </center></h2> 
</div>
</body>
</html>