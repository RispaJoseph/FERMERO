<?php

include('../dbconnection.php');
if (! empty($_POST["category_name"])) {
    $m=$_POST["category_name"];
   
$sql="select  * from addnews1 where category_name='$m'  ";
$exe=mysqli_query($con,$sql);


            
           }
   ?>
     
   
<div  class="row clearfix">

   <?php  while($fetch=mysqli_fetch_array($exe))
             {
                
                 $ui=$fetch['category_name'];
                 $fgh="select * from addnews1 where category_name='$ui' ";
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
                                    
                                    <div class="info clearfix">
                                        <ul class="post-meta clearfix">
                                            <li><a href="#"><span class="fa fa-clock-o"></span> <?php echo $fetch['date'];?></a></li>
                                            <li><a href="#"><span class="fa fa-comment-o"></span><?php echo $fetch['time'];?></a></li>
                                        </ul>
                                        <div class="more-link"><a href="news_single.php".php?m=<?php echo $fetch['title'];?>">Read More</a></div>
                                        
                                       
                                
                                    </div>
                            </div>
                                </div>
                            </div>
                        </section>
   

                   
                     <?php
                              }
                         ?>
                        
                         </div>
                    
                    
     
                   
                    
                    
                            

