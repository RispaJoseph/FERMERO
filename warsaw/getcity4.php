<?php

include('../dbconnection.php');
if (! empty($_POST["category_name"])) {
    $m=$_POST["category_name"];
    $a=date("Y-m-d", strtotime("now"));
$sql="select distinct product_name from addproduct where category_name='$m' and expiry_date >= '$a' ";
$exe=mysqli_query($con,$sql);


            
           }
   ?>
     
   
<div  class="row clearfix">

   <?php  while($fetch=mysqli_fetch_array($exe))
             {
                 $a=date("Y-m-d", strtotime("now"));
                 $ui=$fetch['product_name'];
                 $fgh="select * from addproduct where product_name='$ui' and expiry_date >= '$a'";
                 $jk=mysqli_query($con,$fgh);
                 $me3=mysqli_fetch_array($jk);
                 $image=$me3['image'];
     ?>
  <!--Default Shop Item-->
                    <div  class="default-shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="shop-single.html"><img src="data:image/jpeg;base64,<?php echo base64_encode($image);?>" alt="noimage" /></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="shop-single.html"><?php echo $fetch['product_name']?></a></h3>
                              
                            </div>
                            
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="prod-options">
                                    
                                   
                                    
                                <a class="theme-btn add-cart-btn"  href="shop-single3.php?m=<?php echo $fetch['product_name'];?>">VIEW MORE <span class="fa fa-shopping-cart"></span></a>
                                
                                </div>
                            </div>
                            
                        </div>
                    </div>

                   
                     <?php
                              }
                         ?>
                    
                    
</div>     
                   
                    
                    
                            

