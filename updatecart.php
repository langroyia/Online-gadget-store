<?php 
@session_start();

//print_r($_REQUEST);
foreach ($_REQUEST['id'] as $key => $value) {
	  $id = $_REQUEST['id'][$key];
	  $quantity = $_REQUEST['quantity'][$key];
      $_SESSION['cart_items_quantity'][$id]=$quantity;
}
     
 
    // redirect to product list and tell the user it was added to cart
    header('Location: cart.php?action=updated');

 ?>