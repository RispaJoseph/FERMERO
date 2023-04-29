<?php

include('../dbconnection.php');
if (! empty($_POST["title"])) {
    $m=$_POST["title"];
   
$sql="select  distinct title,image,des from subsidy where title='$m'  ";
$exe=mysqli_query($con,$sql);


            
           }
   ?>
     
   
<div  class="row clearfix">

   <?php  while($fetch=mysqli_fetch_array($exe))
             {
                
                 $ui=$fetch['title'];
                 $fgh="select * from subsidy where title='$ui' ";
                 $jk=mysqli_query($con,$fgh);
                 $me3=mysqli_fetch_array($jk);
                 $image=$me3['image'];
     ?>
  <!--Default Shop Item-->
                    
                    <!--Blog Classic-->
                    <section class="blog-classic-view">
                     
                        <!--News Style One-->
                        <div class="news-style-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href=""><img src="data:image/jpeg;base64,<?php echo base64_encode($fetch['image']);?>" alt="noimage"  /></a></figure>
                      
                                <div class="lower-content">
                                    <h3><a href=""><?php echo $fetch['title']?>.</a></h3>
                                    <div class="text"><?php echo $fetch['des']?>.  </div>
                                    <div class="info clearfix">
                                        
                                        <div class="more-link"><a href="subsidy_single.php?m=<?php echo $fetch['title'];?>">Read More</a></div>
                                        
                                       
                                
                                    </div>
                            </div>
                                </div>
                            </div>
                        </section>
   

                   
                     <?php
                              }
                         ?>
                        
                         </div>
                    
                    
     
                   
                    
                    
                            

