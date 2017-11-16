<?PHP
include("header.php");
include('config.php');
if(isset($_REQUEST['brand'])){
	$brand = $_REQUEST['brand'] ;
	}else{
		$brand = "";
		}

$q = "";
if($brand!=""){
	$q .= " and brand_id='".$brand."'";
	}
	/*if($brand!=""){
	$q .= " and price='".$price."'";
	}*/
$querry= "select product.*,product_image.image_name,brand.name as brandname from product left join product_image on product_image.product_id= product.id left join brand on brand.id= product.brand_id where cat_id='6' ".$q." group by product.id ";

$results = mysqli_query($con,$querry) or die(mysqli_error($con));
?>
<div style=" display:table" class="container">
<div class="panel panel-default col-lg-3 col-lg-offset-1" style="border:hidden"><br>
<ol class="breadcrumb">
    <li><a href="index.php">Home</a></li> 
    <li class="active">Smart Watches</li>
</ol>
  <div >
    <h3 class="panel-title">BRANDS</h3>
  </div><br>
  
  <div style="margin-left:17px"><a href="watches.php?brand=11"> <p>Apple</p></a></div>
  <div style="margin-left:17px"><a href="watches.php?brand=10"> <p>Samsung</p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>Motorola</p></a></div>
  <div style="margin-left:17px"><a href="watches.php?brand=13"> <p>Sony</p></a></div>
  <hr>
  
  <div >
    <h3 class="panel-title">PRICE</h3>
  </div><br>
  
  <div style="margin-left:17px"><a href="#"> <p>₹5000 and Below </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>₹5001 - ₹10,000 </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>₹10,001 - ₹18,000 </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>₹18,001 - ₹25,000 </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>₹25,001 & Above </p></a></div>
  <hr>
  
  <div>
  <h3 class="panel-title">USAGE</h3>
  </div><br>
  
  <div style="margin-left:17px"><a href="#"> <p>Fitness & Outdoor </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>Watchphone</p> </a></div>
  <hr>
  
  <div>
   <h3 class="panel-title">DIAL SHAPE</h3>
  </div><br>
  
  <div style="margin-left:17px"><a href="#"> <p>Circle</p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>Rectangle</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>Square </p> </a></div>
  <hr>
  
  <div>
    <h3 class="panel-title">STRAP COLOR</h3>
  </div><br>
  
  <div style="margin-left:17px"><a href="#"> <p>Black </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>Brown</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>Gold</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>White</p> </a></div>
  <hr>
  
   <div>
   <h3 class="panel-title">COMPATIBLE OS</h3>
  </div><br>
  
  <div style="margin-left:17px"><a href="#"> <p>iOS </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>Android</p> </a></div>
  
</div>
  

<h2> <b><font color="#7E7979">&nbsp;&nbsp;SMART WATCHES</font></b></h2>
<div class="col-sm-8">
<div class="row">
<?php
while($row=mysqli_fetch_array($results)){
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
    <?php }?>
  
</div>
</div>
</div>

<?PHP
include("footer.php");
?>