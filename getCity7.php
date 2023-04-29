<?php
include('dbconnection.php');
if (! empty($_POST["category1"])) {
    $m=$_POST["category1"];
    
$sql="select * from dir where category1='$m'";
$exe=mysqli_query($con,$sql);


            
           }
   ?>
<footer>
       <?php if($exe)
                        {
                            ?>
<table class="table table-striped" align="center">
					<thead>
						<tr>
                            
                            <th  style="color:rgb(181,230,29);class="col-xs-12""   ><h5><i>TITLE</i></h5></th>
                            
                            <th  style="color:rgb(181,230,29);"   ><h5><i>PLACE</i></h5></th>
                            <th  style="color:rgb(181,230,29);"   ><h5><i>DISTRICT</i></h5></th>
                           
                            <th  style="color:rgb(181,230,29);"   ><h5><i>WEBSITE</i></h5></th>
                             <th  style="color:rgb(181,230,29);"   ><h5><i>EMAIL</i></h5></th>
                             <th  style="color:rgb(181,230,29);width:20%"   ><h5><i>ACTION</i></h5></th>
                           
                           
                            
						 
                        </tr>

						</thead>
					<tbody>
                        <?php
                       
                        
						while($fetch=mysqli_fetch_array($exe))
						{
							?>
						 
						        <tr>
                                    
							
                                    <td style="width:30%;"><?php echo $fetch['title']?></td>
                                    
                                    <td><?php echo $fetch['place']?></td>
                                    <td><?php echo $fetch['district']?></td>
                                     <td><?php echo $fetch['web']?></td>
                                    <td><?php echo $fetch['email']?></td>
                                    
                                                                        
<td><a  style="padding:5px;width:25%;font-size:20px;font-family:cooper black;color:orange" href="./warsaw/shop_directory.php?m=<?php echo $fetch['title'];?>"><font ><b>View</b></font></a></td>
                                                                          
                                 
                                   
                        </tr>
							
							<?php }
                        ?>  
                        </tbody>
</table>
 <?php
                        }
                        ?>
</footer>

                   
                                                       					
							

						<br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                					<?php
						
mysqli_close($con);
						?>
					
                
               