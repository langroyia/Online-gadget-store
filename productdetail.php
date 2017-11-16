<?PHP
include("header.php");
include('config.php');
$pid = $_REQUEST['id'];

$querry= "select product.*,brand.name as brandname from product    left join brand on brand.id= product.brand_id where  product.id='".$pid."'";

$results = mysqli_query($con,$querry) or die(mysqli_error($con));
  $product_detail = mysqli_fetch_assoc($results);
   //print_r($product_detail);
?>
<div style=" display:table" class="container">  
  <?php 
$action = isset($_GET['action']) ? $_GET['action'] : "";
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : "1";
$name = isset($_GET['name']) ? $_GET['name'] : "";
 
  if($action=='added'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$name}</strong> was added to your cart!";
    echo "</div>";
}
 
if($action=='exists'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$name}</strong> already exists in your cart!";
    echo "</div>";
} ?>

<div class="row" style="margin-top:30px">
		<div class="col-sm-6">
		<?php  $q = "select * from product_image where product_id ='$pid'";
    $images = mysqli_query($con,$q) or die(mysqli_error($con));
    if(  mysqli_num_rows($images)>0){
       $product_images = mysqli_fetch_assoc($images);
		?>
            <div class="product-images"> 
               <img src="<?php echo 'products/'.$product_images['image_name'];  ?>" class="img-responsive">
             </div>
          <?php }?>
		
		</div>
		<div class="col-sm-6">
		<h2> <b><font color="#7E7979"><?php  echo $product_detail['name'];  ?></font></b></h2>
		<h5> <b><font color="#7E7979">Brand: <?php  echo $product_detail['brandname'];  ?></font></b></h5>
		<h4><b>Rs.<?php  echo $product_detail['price'];  ?></b></h4>
		<div classs="short-disc discription">
			<p><?php  echo $product_detail['short_disp'];  ?></p>
		</div>
		<form action="addtocart.php">
			<input type="text" name="quantity" value="1" class="form-control" style="width:50px;display: inline; text-align:center">
			<input type="hidden" name="name" value="<?php  echo $product_detail['name'];  ?>">
			<input type="hidden" name="id" value="<?php  echo $pid;  ?>">
			<input type="submit" name="submit" value="Add to Cart" class="btn btn-primary" style="display:inline">
		</form>
		 

		</div>
		<div class="col-sm-12"><hr>
			<div classs="long-disc discription"><p><?php  echo $product_detail['long_disp'];  ?></p>
			</div>
		</div>
		</div>

</div>
<?PHP
include("footer.php");
?>