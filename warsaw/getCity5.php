<?php

include('../dbconnection.php');
if (! empty($_POST["category_name"])) {
    $m=$_POST["category_name"];
 
$sql="select * from plant where category_name='$m'";
$exe=mysqli_query($con,$sql);


            
           }
   ?>
     
   
<div  class="row clearfix">

   <?php  while($fetch=mysqli_fetch_array($exe))
             {
                
                 $ui=$fetch['category_name'];
                 $fgh="select * from plant where category_name='$ui'";
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
                                    
                                   
                                <a class="theme-btn add-cart-btn"  href="shop_singleplant.php?m=<?php echo $fetch['title'];?>">VIEW MORE <span class="fa fa-shopping-cart"></span></a>
                                
                                </div>
                            </div>
                            
                        </div>
                    </div>

                   
                     <?php
                              }
                         ?>
                    
                    
</div>     
                   
                    
                    
                            

