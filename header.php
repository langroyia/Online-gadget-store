<?php @session_start();
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Online Gadgets Store</title>
</head>

<body>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>eCommerce</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<link href="css/eCommerce.css" rel="stylesheet" type="text/css">
<link href="css/demo.css" rel="stylesheet" type="text/css">


</head>
<body style="padding-top: 90px">

<nav class="navbar-fixed-top navbar-default " style="background-color:!important">
<div class="container">
  <div class="container">
  <div class="codrops-top ">
               
                <span class=" right">
              
                  <!--  <a href="register.php">
                        <strong>Sign Up</strong>
                    </a> -->
                    
            <!--     <?php if(isset($_SESSION['name']))
				 { 
					 echo '<a href="#"><span><strong>'.$_SESSION['name'].'</strong></span></a>';
					 echo '<a href="#"><span><strong>Your Orders</strong></span></a>'; 
					 echo '<a href="logout.php"><span><strong>Logout</strong></span></a>'; 
				 }
				 else
				 {
					echo "<a href='login5.php'><strong>Log In</strong></a>"; 
				 }
				 ?>
				 -->
						
						
                    
                    
                </span>
                <div class="clr"></div>
            </div></div>
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php"><b>Online Gadgets Store</b></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="newmobile.php">Mobile<span class="sr-only">(current)</span></a> </li>
        <li><a href="tablet.php">Tablets</a> </li>
        <li><a href="laptop.php">Laptop</a> </li>
        <li><a href="accessories.php">Accessories</a> </li>
        <li><a href="watches.php">Smart Watches</a> </li>
      </ul>
     <form class="navbar-form navbar-right" role="search" method="get" action="search.php">
        <div class="form-group">
          <input type="text" name="search" class="form-control" placeholder="Search....." >
        </div>
        <button type="submit" name="submit" class="btn btn-default"><b>Search</b></button>
      </form>


	  
      <ul class="nav navbar-nav navbar-right hidden-sm">
      
        <li><a href="cart.php"><font size="+1"><b>Cart <?php if(isset($_SESSION['cart_items'])) echo " (".count($_SESSION['cart_items']).")"; ?></b></font></a> </li>
       
      </ul>
     
      
    </div>
    <!-- /.navbar-collapse --> 
  </div>
 
</nav>