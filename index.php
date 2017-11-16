<?PHP
include("header.php");
include('config.php');
 $querry= "select * from slider where page='Home Page'";

$results = mysqli_query($con,$querry);
?>

<div class="container">

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div id="carousel1" class="carousel slide">
               <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"> </li>
            <li data-target="#carousel1" data-slide-to="1" class=""> </li>
            <li data-target="#carousel1" data-slide-to="2" class=""> </li>
            <li data-target="#carousel1" data-slide-to="3" class=""> </li>
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
    <hr>
  </div>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-lg-offset-1"><img class="img-circle" alt="Free Shipping" src="images/freeShipping.jpg"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
          <h4>Free Shipping</h4>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-lg-offset-2"><img class="img-circle" alt="Free Shipping" src="images/Easy.png"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
          <h4>Easy Returns</h4>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 col-lg-offset-4"><img class="img-circle" alt="Free Shipping" src="images/low_price.png"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
          <h4>Low Price</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
<h2 class="text-center">TODAY DEAL'S</h2>
<hr>
<div class="container">
  <div class="row text-center">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
      <div class="thumbnail"> <a href="productdetail.php?id=9" style="text-decoration:none"><img src="images/apple-iphone-6s.jpg" alt="iPhone 6s" class="img-responsive">
        <div class="caption">
          <h3>Great Deal on iPhone 6s</h3>
          <p>There is no better time to get iPhone.</p>
        </div></a>
      </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
      <div class="thumbnail"> <a href="productdetail.php?id=10" style="text-decoration:none"><img src="images/alienware.jpg" alt="Hard Core Gaming" class="img-responsive">
        <div class="caption">
          <h3>Hard Core Gaming</h3>
          <p>With Afordable Prices from HP, Dell & More.</p>
        </div></a>
      </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
      <div class="thumbnail"> <a href="productdetail.php?id=11" style="text-decoration:none"><img src="images/Samsung_Memory_Card.png" alt="Memory Card" class="img-responsive">
        <div class="caption">
          <h3>Memory Cards</h3>
          <p>Upto 40% off on Memory Cards.</p>
        </div></a>
      </div>
    </div>
  
  </div>
  <div class="row text-center hidden-xs">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail"><a href="productdetail.php?id=12" style="text-decoration:none"> <img src="images/samsung-galaxy-gear-2.jpg" alt="Samsung Gear 2" class="img-responsive">
        <div class="caption">
          <h3>Samsung Gear 2</h3>
          <p>Flat ₹5000 Off.</p>
        </div></a>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail"> <a href="productdetail.php?id=13" style="text-decoration:none"><img src="images/SSD-750-EVO-400x200.png" alt="Hard Drives" class="img-responsive">
        <div class="caption">
          <h3>Hard Drives</h3>
          <p>With 5 Years Warranty </p>
        </div></a>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail"> <a href="productdetail.php?id=14" style="text-decoration:none"><img src="images/applw ipad.png" alt="Apple iPads" class="img-responsive">
        <div class="caption">
          <h3>Apple iPads</h3>
          <p>Starting at ₹17,990</p>
        </div></a>
      </div>
    </div>
  </div>
</div>
<hr>

<h2 class="text-center">FEATURED PRODUCTS</h2>
<hr>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="media-object-default">
        <div class="media"><a href="productdetail.php?id=15" style="text-decoration:none; color:inherit">
          <div class="media-left"> <img class="media-object" src="images/watch os.jpg" alt="Apple Watch">  </div>
          <div class="media-body">
            <h4 class="media-heading">Apple Watch</h4>
            Force Touch<br>Siri Compatible<br>Retina Display<br>Heart Rate Sensor </div><hr style="margin:13px">
          <div class="text-center">Rs <font size="+2"><b>29,899 </b></font>  <font style="text-decoration:line-through" size="-1"> Rs 34,900</font></div><hr style="margin:13px"></a>
        </div>
        
        <div class="media"><a href="productdetail.php?id=17" style="text-decoration:none; color:inherit">
          <div class="media-left"> <img class="media-object" src="images/hp-pavilion.jpg" alt="HP Pavilion 11">  </div>
          <div class="media-body">
            <h4 class="media-heading">HP Pavilion 11</h4>
           Bang & Olufsen Audio<br>Island-style keyboard<br>Windows 10 OS<br>WLED touch display </div><hr style="margin:13px">
            <div class="text-center">Rs <font size="+2"><b>19,999 </b></font>  <font style="text-decoration:line-through" size="-1"> Rs 21,999</font></div><hr style="margin:13px"></a>
        </div>
        
        <div class="media"><a href="#" style="text-decoration:none; color:inherit">
          <div class="media-left"> <img class="media-object" src="images/wd hard disk.jpg" alt="WD 1 TB Internal Hard Drive"></div>
          <div class="media-body">
            <h4 class="media-heading">WD 1 TB Internal Hard Drive </h4>
          2.5 inch Form Factor<br>SATA 3.0 Gbps Interface<br>8 MB Cache Memory<br>5400 RPM Spin Speed</div><hr style="margin:13px">
           <div class="text-center">Rs <font size="+2"><b>4,000 </b></font>  <font style="text-decoration:line-through" size="-1"> Rs 4,899</font></div><hr style="margin:13px"></a>
        </div>
      </div>
    </div>
    <hr class="hidden-md hidden-lg">
    <div class="col-lg-4 col-md-6">
      <div class="media-object-default">
        <div class="media"><a href="productdetail.php?id=16" style="text-decoration:none; color:inherit">
          <div class="media-left"><img class="media-object" src="images/micromax.jpg" alt="Micromax Canvas"></div>
          <div class="media-body">
            <h4 class="media-heading">Micromax Canvas</h4>
            Android v5 (Lollipop) OS<br>5 MP Primary Camera<br>2 MP Secondary Camera<br>8 inch Touchscreen</div><hr style="margin:13px">
             <div class="text-center">Rs <font size="+2"><b>7,299 </b></font>  <font style="text-decoration:line-through" size="-1"> Rs 9,999</font></div><hr style="margin:13px"></a>
        </div>
        
        <div class="media"><a href="productdetail.php?id=1" style="text-decoration:none; color:inherit">
          <div class="media-left"> <img class="media-object" src="images/apple-iphone-se-1.jpg" alt="iPhone SE"></div>
          <div class="media-body">
            <h4 class="media-heading">iPhone SE</h4>
            iOS 9<br>12 MP Primary Camera<br>4K Video<br>Fingerprint Sensor</div><hr style="margin:13px">
             <div class="text-center">Rs <font size="+2"><b>34,999 </b></font>  <font style="text-decoration:line-through" size="-1"> Rs 36,999</font></div><hr style="margin:13px"></a>
        </div>
        
        <div class="media"><a href="productdetail.php?id=20" style="text-decoration:none; color:inherit">
          <div class="media-left"> <img class="media-object" src="images/na-sony-100x125.jpg" alt="Sony Smartwatch"></div>
          <div class="media-body">
            <h4 class="media-heading">Sony Smartwatch</h4>
            Android Wear OS<br>1.2 GHz Processor<br>In-built GPS<br>Exchangeable Straps</div><hr style="margin:13px">
             <div class="text-center">Rs <font size="+2"><b>12,999 </b></font>  <font style="text-decoration:line-through" size="-1"> Rs 14,990</font></div><hr style="margin:13px"></a>
        </div>
      </div>
    </div>
    <hr class="hidden-lg">
    <div class="col-lg-4 col-md-12 hidden-md">
      <div class="media-object-default">
        <div class="media"> <a href="productdetail.php?id=2" style="text-decoration:none; color:inherit">
          <div class="media-left"> <img class="media-object" src="images/samsung j7.jpg" alt="Samsung Galaxy j7"></div>
          <div class="media-body">
            <h4 class="media-heading">Samsung Galaxy J7</h4>
             5.5" sAMOLED Display<br>13MP|5MP; Dual Flash<br>Android Marshmallow 6<br>3300mAh Battery</div><hr style="margin:13px">
              <div class="text-center">Rs <font size="+2"><b>14,999 </b></font>  <font style="text-decoration:line-through" size="-1"> Rs 15,990</font></div><hr style="margin:13px"></a>
        </div>
        
        <div class="media"><a href="productdetail.php?id=18" style="text-decoration:none; color:inherit">
          <div class="media-left"><img class="media-object" src="images/dell-inspiron-notebook-100x125.jpg" alt="Dell Inspiron 3558"></div>
          <div class="media-body">
            <h4 class="media-heading">Dell Inspiron 3558</h4>
            Core i3 (5th Gen)<br>4 GB RAM<br>500 GB HDD<br>Windows 10</div><hr style="margin:13px">
             <div class="text-center">Rs <font size="+2"><b>29,990 </b></font>  <font style="text-decoration:line-through" size="-1"> Rs 31,999</font></div><hr style="margin:13px"></a>
        </div>
        <div class="media"><a href="productdetail.php?id=21" style="text-decoration:none; color:inherit">
          <div class="media-left"> <img class="media-object" src="images/samsung-galaxy-tab-4-t231-100x125.jpg" alt="Samsung Galaxy Tab 4"></div>
          <div class="media-body">
            <h4 class="media-heading">Samsung Galaxy Tab 4</h4>
            Android v4.4 OS<br>1.2 GHz Processor<br>3 MP Primary Camera<br>7 inch Touchscreen</div><hr style="margin:13px">
             <div class="text-center">Rs <font size="+2"><b>11,250 </b></font>  <font style="text-decoration:line-through" size="-1"> Rs 12,999</font></div><hr style="margin:13px"></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?PHP
include("footer.php");
?>