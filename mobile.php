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
$querry= "select product.*,product_image.image_name,brand.name as brandname from product left join product_image on product_image.product_id= product.id left join brand on brand.id= product.brand_id where cat_id='2' ".$q." group by product.id ";

$results = mysqli_query($con,$querry) or die(mysqli_error($con));
?>
<div style=" display:table" class="container">
<div class="panel panel-default col-lg-3 col-lg-offset-1" style="border:hidden"><br>
<ol class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li class="active">Mobile</li>
</ol>
  <div >
    <h3 class="panel-title">TOP BRANDS</h3>
  </div><br>
  				
  <div style="margin-left:17px"><a href="mobile.php?brand=11"<p>Apple</p></a></div>
  <div style="margin-left:17px"><a href="mobile.php?brand=10"> <p>Samsung</p></a></div>
  <div style="margin-left:17px"><a href="mobile.php?brand=13"> <p>Sony</p></a></div>
  
  <div style="margin-left:17px"><a href="mobile.php?brand=11"> <p>Motorola </p></a></div>
  
  <div style="margin-left:17px"><a href="#"> <p>HTC </p></a></div>
  <div style="margin-left:17px"><a href="mobile.php?brand=15"> <p>Xiomi Mi </p></a></div>
 
  <div style="margin-left:17px"><a href="mobile.php?brand=18"> <p>Micromax </p></a></div>
  <hr>
  
  <div >
    <h3 class="panel-title">PRICE</h3>
  </div><br>
  
  <div style="margin-left:17px"><a href="#"> <p>₹10000 and Below </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>₹10001 - ₹20,000 </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>₹20,001 - ₹28,000 </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>₹28,001 - ₹35,000 </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>₹35,000 or More</p></a></div>
  <hr>
  
  
  <div>
    <h3 class="panel-title">SCREEN SIZE</h3>
  </div><br>
  
  <div style="margin-left:17px"><a href="#"> <p>3.5 - 4 inch</p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>4 - 4.5 inch</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>4.5 - 5 inch</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>5 inch or More</p> </a></div>
  <hr>
  
  <div>
    <h3 class="panel-title">RESOLUTION TYPE</h3>
  </div><br>
  
  <div style="margin-left:17px"><a href="#"> <p>SD</p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>HD</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>Full HD</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>Quad HD</p> </a></div>
  
</div>
  

<h2> <b><font color="#7E7979">&nbsp;&nbsp;MOBILE</font></b></h2>


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