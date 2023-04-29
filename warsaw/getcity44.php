<?php

include('../dbconnection.php');
if (! empty($_POST["category_name"])) {
    $m=$_POST["category_name"];
    
$sql="select * from addprosupp where category_name='$m'";
$exe=mysqli_query($con,$sql);


            
           }
   ?>
     
   
<div  class="row clearfix">

   <?php  while($fetch=mysqli_fetch_array($exe))
             {
     ?>
  <!--Default Shop Item-->
                    <div  class="default-shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="shop-single1.php"><img src="data:image/jpeg;base64,<?php echo base64_encode($fetch['image']);?>" alt="logo" style="height:200px" width="100px" title="logo"/></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="shop-single.html"><?php echo $fetch['product_name']?></a></h3>
                                <div class="price"><span class="price-txt">$ <?php echo $fetch['unitcost']?>.00</span></div>
                            </div>
                            
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="prod-options">
                                   
                                    
                                <a class="theme-btn add-cart-btn"  href="shop-single1.php?m=<?php echo $fetch['product_name'];?>">VIEW MORE <span class="fa fa-shopping-cart"></span></a>
                                
                                </div>
                            </div>
                            
                        </div>
                    </div>

                   
                     <?php
                              }
                         ?>
                    
                    
</div>     
                   
                    
                    
                            

