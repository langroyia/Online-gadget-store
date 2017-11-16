<?PHP
include("header.php");
include('config.php');
  
   //print_r($product_detail);
?>
<div style=" display:table" class="container">  
  <?php $action = isset($_GET['action']) ? $_GET['action'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
 
if($action=='removed'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$name}</strong> was removed from your cart!";
    echo "</div>";
}
 
else if($action=='updated'){
    echo "<div class='alert alert-info'>";
        echo "Cart updated!";
    echo "</div>";
}
if(isset($_SESSION['cart_items'])){
if(count($_SESSION['cart_items'])>0){
 
    // get the product ids
    $ids = "";
    foreach($_SESSION['cart_items'] as $id=>$value){
        $ids = $ids . $id . ",";
    }
    //echo "<pre>"; print_r($_SESSION['cart_items_quantity']); echo "</pre>";
 
    // remove the last comma
    $ids = rtrim($ids, ',');
 ?>
<form action="updatecart.php" method="post">
 <?php 
    //start table
    echo "<table class='table table-hover table-responsive table-bordered'>";
 
        // our table heading
        echo "<tr>";
            echo "<th class='textAlignLeft'>Product Name</th>";
            echo "<th>Quantity </th>";
            echo "<th>Price </th>";
            echo "<th>Total Price </th>";
            echo "<th>Action</th>";
        echo "</tr>";
 
        $query = "SELECT id, name, price FROM product WHERE id IN ({$ids}) ORDER BY name";
 
   $results = mysqli_query($con,$query) or die(mysqli_error($con));
  //$product_detail = mysqli_fetch_assoc($results)
 
        $total_price=0;
        while ($row = mysqli_fetch_assoc($results)){
            extract($row);
 
            echo "<tr>";
                echo "<td>{$name}</td>";
                echo "<td><input type='text' name='quantity[]' value='".$_SESSION['cart_items_quantity'][$id]."' class='form-control' style='width:70px;'><input type='hidden' name='id[]' value='".$id."'></td>";
                echo "<td>Rs.{$price} </td>";
                echo "<td>Rs.".$price*$_SESSION['cart_items_quantity'][$id]."</td>";
                echo "<td>";
                    echo "<a href='removecart.php?id={$id}&name={$name}' class=' ' title='Remove from cart'>";
                        echo "<span class='glyphicon glyphicon-remove'></span> ";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";
 
            $total_price+=$price*$_SESSION['cart_items_quantity'][$id];
        }
 
        echo "<tr>";
                echo "<td colspan='3'><b>Total</b></td>";
                echo "<td colspan='2'>Rs.{$total_price}</td>";
                 
            echo "</tr>";
 
    echo "</table>";
  
                     echo "<button type='submit' class='btn btn-success pull-right'>";
                        echo "<span class='glyphicon glyphicon-shopping-cart'></span> Update Cart";
                    echo "</button>";
?>
</form>
<?php 
} }
else{
    echo "<div class='alert alert-danger'>";
        echo "<strong>No products found</strong> in your cart!";
    echo "</div>";
} ?>
 
<?PHP
include("footer.php");
?>