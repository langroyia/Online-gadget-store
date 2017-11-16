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
$querry= "select product.*,product_image.image_name,brand.name as brandname from product left join product_image on product_image.product_id= product.id left join brand on brand.id= product.brand_id where cat_id='4' ".$q." group by product.id ";

$results = mysqli_query($con,$querry) or die(mysqli_error($con));
?>
<div style=" display:table" class="container">
<div class="panel panel-default col-lg-3 col-lg-offset-1" style="border:hidden"><br>
<ol class="breadcrumb">
    <li><a href="index.php">Home</a></li> 
       <li class="active">Laptop</li>
</ol>
  <div >
   <h3 class="panel-title">BRANDS</h3>
  </div><br>
  
  <div style="margin-left:17px"><a href="laptop.php?brand=11"> <p>Apple</p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>Acer</p></a></div>
  <div style="margin-left:17px"><a href="laptop.php?brand=17"> <p>Dell</p></a></div>
  <div style="margin-left:17px"><a href="laptop.php?brand=19"> <p>HP</p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>Lenovo</p></a></div>
  <hr>
  
  <div >
  <h3 class="panel-title">PROCESSOR BRAND</h3>
  </div><br>
  <div style="margin-left:17px"><a href="#"> <p>Intel </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>AMD</p></a></div>
  <hr>
  
  <div >
  <h3 class="panel-title">PRICE</h3>
  </div><br>
  <div style="margin-left:17px"><a href="#"> <p>₹10,000 - ₹20,000 </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>₹20,001 - ₹30,000 </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>₹30,001 - ₹40,000 </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>₹40,001 - ₹50,000 </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>₹50,001 & Above </p></a></div>
  <hr>
  
  <div>
  <h3 class="panel-title">PROCESSOR</h3>
  </div><br>
  
  <div style="margin-left:17px"><a href="#"> <p>APU Dual Core E1 </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>APU Quad Core A8</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>APU Quad Core A10</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>Core i3</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>Core i5</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>Core i7</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>Intel Atom Quad Core</p> </a></div>
  <hr>
  
  <div>
  <h3 class="panel-title">SCREEN SIZE</h3>
  </div><br>
  
  <div style="margin-left:17px"><a href="#"> <p>Below 12 inch</p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>12 inch - 12.9 inch</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>13 inch - 13.9 inch</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>14 inch - 14.9 inch</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>15 inch & Above</p> </a></div>
  <hr>
  
  <div>
  <h3 class="panel-title">SYSTEM MEMORY</h3>
  </div><br>
  
  <div style="margin-left:17px"><a href="#"> <p>2 GB </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>4 GB</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>6 GB</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>8 GB</p> </a></div>
  <hr>
  
  <div>
  <h3 class="panel-title">GRAPHIC MEMORY</h3>
  </div><br>
  
  <div style="margin-left:17px"><a href="#"> <p>Integrated Graphic Card </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>1 GB</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>2 GB</p> </a></div>
  <hr>
  
  <div>
  <h3 class="panel-title">HDD CAPACITY</h3>
  </div><br>
  
  <div style="margin-left:17px"><a href="#"> <p>500 GB </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>1 TB</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>2 TB</p> </a></div>
  <hr>
  
  <div>
  <h3 class="panel-title">SSD CAPACITY</h3>
  </div><br>
  
  <div style="margin-left:17px"><a href="#"> <p>128 GB </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>256 GB</p> </a></div>
  <div style="margin-left:17px"><a href="#"> <p>512 GB</p> </a></div>
  <hr>
  
  <div>
  <h3 class="panel-title">GRAPHICS MEMORY TYPE</h3>
  </div><br>
  
  <div style="margin-left:17px"><a href="#"> <p>GDD3 </p></a></div>
  <div style="margin-left:17px"><a href="#"> <p>GDD5</p> </a></div>
</div>
  

<h2> <b><font color="#7E7979">&nbsp;&nbsp;LAPTOP</font></b></h2>
<div class="col-sm-8">
<div class="row">
<?php
while($row=mysqli_fetch_array($results)){
?>
  <div class="col-md-4">
   <a href="productdetail.php?id=<?php echo $row['id']?>" style="color:#000000"> <div class="img-responsive text-center"><img src="products/<?php echo $row['image_name'] ?>" height="170px" width="240px"/>
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