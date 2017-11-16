<?PHP
include('header.php');
include('config.php');
if (isset($_REQUEST["search"]))
{
 $u_id = "0"; 
       
	  $term = $_REQUEST['search'];  


$query= "select product.*,product_image.image_name,brand.name as brandname from product left join product_image on product_image.product_id= product.id left join brand on brand.id= product.brand_id WHERE (product.name LIKE '%".$term."%') OR (brand.name LIKE '%".$term."%') group by product.id ";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
?>
<div class="container">
<div class="col-sm-8">
<div class="row">
<?php

while($row=mysqli_fetch_array($result)){
?>
  <div class="col-md-4">
   <a href="productdetail.php?id=<?php echo $row['id']?>" style="color:#000000"> <div class="img-responsive text-center"><img src="products/<?php echo $row['image_name'] ?>" height="170px" />
      <div class="caption">
        <h3 align="center"><?php echo $row['name']?></h3>
        <p align="center"><?php echo $row['short_disp']?></p><hr style="margin:12px">
        <h4 align="center"><font size="-1">Rs </font> <?php echo $row['price']?></h4><hr style="margin:12px">
      </div></div>
    </a>
    </div>
    
    <?php 
} 
} ?>
   
  </div>
</div>
</div>
<?PHP
include('footer.php');
?>
