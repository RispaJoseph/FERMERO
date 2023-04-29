<?php
include('dbconnection.php');
if (! empty($_POST["category_name"])) {
    $m=$_POST["category_name"];
    
$sql="select * from addproduct where status=1 and category_name='$m'";
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
                            
                            <th  style="color:rgb(181,230,29);"   ><h5><i>PRODUCT</i></h5></th>
                            
                            <th  style="color:rgb(181,230,29);"   ><h5><i>QUANTITY</i></h5></th>
                            <th  style="color:rgb(181,230,29);"   ><h5><i>UNITCOST</i></h5></th>
                            <th  style="color:rgb(181,230,29);"   ><h5><i>TOTALPRICE</i></h5></th>
                            <th  style="color:rgb(181,230,29);"   ><h5><i>EDIT</i></h5></th>
                            <th  style="color:rgb(181,230,29);"   ><h5><i>DISABLE</i></h5></th>
                            
						 
                        </tr>

						</thead>
					<tbody>
                        <?php
                       
                        
						while($fetch=mysqli_fetch_array($exe))
						{
							?>
						 
						        <tr>
                                    
							
                                    <td><?php echo $fetch['product_name']?></td>
                                    
                                    <td><?php echo $fetch['quantity']?></td>
                                    <td><?php echo $fetch['unitcost']?></td>
                                    <td><?php echo $fetch['tprice']?></td>
                                                                        
<td><a  style="padding:5px;width:25%;font-size:20px;font-family:cooper black;color:orange" href="product_updates.php?m=<?php echo $fetch['pid'];?>"><font ><b>Edit</b></font></a></td>
                                                                          
<td><a  style="padding:5px;width:25%;font-size:20px;font-family:cooper black;color:orange" href="product_delete.php?m=<?php echo $fetch['pid'];?>"><font ><b>Disable</b></font></a></td>                                  
                                   
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
					
                
               