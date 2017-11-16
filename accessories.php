<?PHP
include("header.php");
include("config.php");
 $querry= "select * from slider where page='Accessory Page'";

$results = mysqli_query($con,$querry);
?>

<div class="container">
 <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div id="carousel1" class="carousel slide center-block" data-ride="carousel" >
    
          <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"> </li>
            <li data-target="#carousel1" data-slide-to="1" class=""> </li>
            <li data-target="#carousel1" data-slide-to="2" class=""> </li>
            
          </ol>
           <div class="carousel-inner">
                  <?php
				if(mysqli_num_rows($results)>0){
					$i= 0;
				 while( $row =	 mysqli_fetch_array($results)){
				?>

   
          
            <div class="item <?php if($i==0) echo 'active';?> "> <a href="#"><img class="img-responsive" src="slider/<?php echo $row['image'] ?>" alt="MacBook Pro"></a>
            </div>
           
        
         
		  <?php $i++; }}?>
            </div>
          <a class="left carousel-control" href="#carousel1" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel1" data-slide="next"><span class="icon-next"></span></a></div>
      </div>
        </div>
       
    </div>


<hr>
<h3 align="center" style="font-family:miama">FEATURED CATEGORIES</h3>
<hr>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="media-object-default">

  <div class="media">
          <div class="media-middle"> <a href="#" > <img class="media-object center-block" src="images/storage.jpg" alt="Storage Drives"> </a> </div>
          <div class="media-body">
            <h4 class="media-heading text-center">STORAGE DRIVES</h4>
		<hr style="margin:12px"> <div><a href="productdetail.php?id=13">Samsung <span class=" glyphicon glyphicon-chevron-right pull-right" aria-hidden="true"></span></a></div>
		<hr style="margin:12px"> <div><a href="#">Seagate  <span class="pull-right glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></div>
        <hr style="margin:12px"> <div><a href="productdetail.php?id=19">WD <span class="pull-right glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></div>
        <hr style="margin:12px"> <div><a href="#">Toshiba <span class="pull-right glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></div>
        <hr style="margin:12px">
        </div>
        </div>

      </div>
    </div>
    <hr class="hidden-md hidden-lg">
    <div class="col-lg-4 col-md-6">
      <div class="media-object-default">
         <div class="media">
          <div class="media-middle"> <a href="#" > <img class="media-object center-block" src="images/sandisk.jpg" alt="Memory Card"> </a> </div>
          <div class="media-body">
            <h4 class="media-heading text-center">PEN DRIVES & MEMORY CARDS</h4>
		<hr style="margin:12px"> <div><a href="productdetail.php?id=11"> Samsung <span class=" glyphicon glyphicon-chevron-right pull-right" aria-hidden="true"></span></a></div>
		<hr style="margin:12px"> <div><a href="#">Sandisk  <span class="pull-right glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></div>
        <hr style="margin:12px"> <div><a href="#"> HP <span class="pull-right glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></div>
        <hr style="margin:12px"> <div><a href="#">Sony <span class="pull-right glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></div>
        <hr style="margin:12px">
        </div>
        </div>
        
       
        
      </div>
    </div>
    <hr class="hidden-lg">
    <div class="col-lg-4 col-md-12 hidden-md">
      <div class="media-object-default">
        <div class="media">
          <div class="media-middle"> <a href="#" > <img class="media-object center-block" src="images/keyboard.jpg" alt="Memory Card"> </a> </div>
          <div class="media-body">
            <h4 class="media-heading text-center">KEYBOARD & MOUSE</h4>
		<hr style="margin:12px"> <div><a href="#"> Logitech <span class=" glyphicon glyphicon-chevron-right pull-right" aria-hidden="true"></span></a></div>
		<hr style="margin:12px"> <div><a href="#">Dell <span class="pull-right glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></div>
        <hr style="margin:12px"> <div><a href="#">iBall <span class="pull-right glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></div>
        <hr style="margin:12px"> <div><a href="#">Intex <span class="pull-right glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></div>
        <hr style="margin:12px">
        </div>
        </div>
        
      
        
      </div>
    </div>
  </div>
</div>

<?PHP
include("footer.php");
?>