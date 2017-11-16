<body style="padding-top: 50px">
<nav class="navbar-fixed-top" style="background-color:inherit">
  <div class="container">
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php"><b>PC World</b></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="newmobile.php">Mobile<span class="sr-only">(current)</span></a> </li>
        <li><a href="tablet.php">Tablets</a> </li>
        <li><a href="laptop.php">Laptop</a> </li>
        <li><a href="accessories.php">Accessories</a> </li>
        <li><a href="watches.php">Smart Watches</a> </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search.....">
        </div>
        <button type="submit" class="btn btn-default"><b>Search</b></button>
      </form>
      <ul class="nav navbar-nav navbar-right hidden-sm">
        <li><a href="cart.php"><b>Cart <?php if(isset($_SESSION['cart_items'])) echo " (".count($_SESSION['cart_items']).")"; ?></b></a> </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"><b>Account</b><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="login.php">Log In</a> </li>
            <li><a href="register.php">Register</a> </li>
            <li><a href="#">Account Settings</a> </li>
            <li><a href="#">Your Orders</a> </li>
            <li><a href="#">Wish List</a> </li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Download App</a> </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>