<?php

$con=mysqli_connect("localhost","root","");
 if(!$con)
 {
  die("couldnotconnect".mysqli_error());
 }
 else
 {
 $login=mysqli_select_db($con,"pcworld");
 }
 ?>