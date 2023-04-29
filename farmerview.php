<?php
include('session.php');

include('dbconnection.php');
$a=1;
$sql="select * from category where category_id='$a';";
$exe=mysqli_query($con,$sql);


?>
<!doctype html>
<head><title>approve</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>






</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">

  <a class="navbar-brand" style="color:white;text-decoration:none ;font-size:38px;font-family:Ravie;flex-shrink: 1;flex-basis: 150px;"><i><b>AGRI</b></i></a>

  <ul class="nav navbar-nav navbar-right">

<li class="nav-item">
      <a class="nav-link" href="adminhome.php" style="color:rgb(181,230,29);text-decoration:none;font-size:23px;padding:8px;flex-shrink: 1;flex-basis: 150px;font-family:Cooper Black;"><i><b>Home</b></i></a>
    </li>

<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:rgb(181,230,29);text-decoration:none;font-size:23px;padding:8px;flex-shrink: 1;
    flex-basis: 150px;font-family:Cooper Black;">
        <i><b>View</b></i> 
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#" style="color:rgb(181,230,29);text-decoration:none;font-size:20px;padding:8px;flex-shrink: 1;
    flex-basis: 150px;"><i><b>Farmer</b></i></a>
        <a class="dropdown-item" href="#"style="color:rgb(181,230,29);text-decoration:none;font-size:20px;padding:8px;flex-shrink: 1;
    flex-basis: 150px;"><i><b>Supplier</b></i></a>
         
      </div>
    
    </li>

<li class="nav-item">
      <a class="nav-link" href="gallery.html" style="color:rgb(181,230,29);text-decoration:none;font-size:23px;padding:8px;flex-shrink: 1;
    flex-basis: 150px;font-family:Cooper Black;"><i><b>Gallery</b></i></a>
    </li>


<li class="nav-item">
      <a class="nav-link" href="logout.php" style="color:rgb(181,230,29);text-decoration:none;font-size:23px;padding:8px;flex-shrink: 1;
    flex-basis: 150px;font-family:Cooper Black;"><i><b>Log Out</b></i></a>
    </li>
  </ul>
</nav>






<form method="POST">
				<table class="table table-striped">
					<thead>
						<tr><th>Category Name</th>
						
                        </tr>

						</thead>
					<tbody>
						 <?php
						while($fetch=mysqli_fetch_array($exe))
						{
							?>
						        <tr>
							<td><?php echo $fetch['category_name']?></td>
							

<?php }?>                                    
</table>
</td>


                           
                                                        </tr>						
							<td></td><td></td>

							</tr>
							
													<?php
						
mysqli_close($con);
						?>
					</tbody>
				</table>
			</form>

		
</body>
</html>