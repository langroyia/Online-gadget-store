<?PHP
include("header.php");
include("config.php");
$querry= "select * from brand where cate_id=2";

$results = mysqli_query($con,$querry);
 $query= "select * from slider where page='Mobile Page'";

$result = mysqli_query($con,$query);
?>


<div class="container">
 <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div id="carousel1" class="carousel slide center-block" data-ride="carousel" >
    
          <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"> </li>
            <li data-target="#carousel1" data-slide-to="1" class=""> </li>
            <li data-target="#carousel1" data-slide-to="2" class=""> </li>
            <li data-target="#carousel1" data-slide-to="3" class=""> </li>
          </ol>
          <div class="carousel-inner">
               
                  <?php
				if(mysqli_num_rows($result)>0){
					$i= 0;
				 while( $row =	 mysqli_fetch_array($result)){
				?>

   
          
            <div class="item <?php if($i==0) echo 'active';?> "> <a href="#"><img class="img-responsive" src="slider/<?php echo $row['image'] ?>" alt="MacBook Pro"></a>
            </div>
           
        
         
		  <?php $i++; }}?>
            </div>
          <a class="left carousel-control" href="#carousel1" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel1" data-slide="next"><span class="icon-next"></span></a></div>
      </div>
        </div>
       
    </div>


<link rel="stylesheet" type="text/css" href="/Content/font-awesome/css/font-awesome.min.css" />


<hr>
<h3 align="center" style="font-family:sail">POPULAR BRANDS</h3>
<hr>
<br>
<div class="container center-block">
  <div class="row">
   <?php
				if(mysqli_num_rows($results)>0){
				 while( $row =	 mysqli_fetch_array($results)){
				?>
    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-2 col-lg-offset-1">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-2 col-lg-3"><a href="mobile.php?brand=<?php echo $row['id']?>"><img class="img-rounded" src="brands/<?php echo $row['image'] ?>" width="120"></div></a>
</div>
    </div>
    
   <?php  }}?>
  </div>
</div>

<br><br>
<div class="container-fluid col-lg-offset-0 col-lg-11"><img class="img-responsive" src="images/1500x100_shopbyfeature.jpg" alt="Shop by Feature" style="margin-left:11%"></div>
<div class="container">
  <div class="row text-center">
    <div class="col-sm-4 col-md-4 col-xs-6 col-lg-6">
      <div class="thumbnail" style="border:hidden"> <a href="#"><img src="images/Feature/8714_Camera750X375.jpg" alt="Camera 8MP or More" class="img-responsive"></a>
        <div class="caption">
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-md-4 col-xs-6 col-lg-6">
      <div class="thumbnail" style="border:hidden"> <a href="#"><img src="images/Feature/8714_Battery-capacity_750X375.jpg" alt="Battery Capacity 3000mAH" class="img-responsive"></a>
        <div class="caption">
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-md-4 col-xs-6 col-lg-12">
      <div class="thumbnail" style="border:hidden"> <a href="#"><img src="images/Feature/touchid.jpg" alt="Fingerprint Sensor" class="img-responsive"></a>
        <div class="caption">
        </div>
      </div>
    </div>
   
  </div>
  <div class="row text-center hidden-xs">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail" style="border:hidden"> <a href="#"><img src="images/Feature/8714_RAM750X375_3.jpg" alt="RAM 3 GB or More" class="img-responsive"></a>
        <div class="caption">
        </div>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail" style="border:hidden"> <a href="#"><img src="images/Feature/8714_Screen-size_750X375.jpg" alt="Screen Size 5'' or More" class="img-responsive"></a>
        <div class="caption">
        </div>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail" style="border:hidden"> <a href="#"><img src="images/Feature/8714_Internal-memory750X375.jpg" alt="Internal memory 16 GB or More" class="img-responsive"></a>
        <div class="caption">
        </div>
      </div>
    </div>
  </div>
</div>

<?PHP
include("footer.php");
?>