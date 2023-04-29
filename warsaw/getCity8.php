<?php

include('../dbconnection.php');
if (! empty($_POST["category1"])) {
    $m=$_POST["category1"];
 
$sql="select * from job where category1='$m'";
$exe=mysqli_query($con,$sql);


            
           }
   ?>
     
   
<div id="s3" class="row clearfix">

   <?php  while($fetch=mysqli_fetch_array($exe))
             {
                
                 $ui=$fetch['category1'];
                 $fgh="select * from job where category1='$ui'";
                 $jk=mysqli_query($con,$fgh);
                 $me3=mysqli_fetch_array($jk);
                 $image=$me3['image'];
     ?>
  <!--Default Shop Item-->
                    <div  class="default-shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href=""><img src="data:image/jpeg;base64,<?php echo base64_encode($image);?>" alt="noimage" /></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href=""><?php echo $fetch['title']?></a></h3>
                              
                            </div>
                            
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="prod-options">
                                    
                                    <a class="option-btn" href="shop-single.php"><span class="fa fa-heart-o"></span></a>
                                    <a class="option-btn" href="shop-single.php"><span class="fa fa-retweet"></span></a>
                                    
                                <a class="theme-btn add-cart-btn"  href="shop_singleJOB.php?m=<?php echo $fetch['title'];?>">VIEW MORE <span class="fa fa-shopping-cart"></span></a>
                                
                                </div>
                            </div>
                            
                        </div>
                    </div>

                   
                     <?php
                              }
                         ?>
                    
                    
</div>     
                   
                    
                    
                            

