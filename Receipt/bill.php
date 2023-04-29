<?php
//call the FPDF library
  session_start();
  require('fpdf.php');
 include('../dbconnection.php');


    $user=$_SESSION['sess'];



    
   
        $sql1="select * from payment1 where username='$user'";
        $exe=mysqli_query($con,$sql1);
     
        $sql2="select date,time from payment1 where username='$user'";
        $exe1=mysqli_query($con,$sql2);
 $sql3="select * from payment1 where username='$user'";
        $exe2=mysqli_query($con,$sql3);
    
     while($row2=mysqli_fetch_array($exe1)){
         
      $date=$row2['date'];
       $time=$row2['time']; 



//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

//create pdf object
$pdf = new FPDF('P','mm','A4');

//add new page
$pdf->AddPage();
//output the result
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130 ,5,'AGROM',0,0);

$pdf->Cell(59 ,5,'',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'Panchayat Building ',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line
// $dt=$row2['sale_date'];

// $adress=$row2['adress'];
// $ph=$row2['c_phone'];
// $pro_name=$row2['pro_name'];
// $sprice=$row2['s_price'];
// $nam= $row2['c_name'];
// $s_id=$row2['sales_id'];

// $sqty=$row2['sqty'];

// $cid=$row2['cust_id'];
// $tot=$sqty*$sprice;
  
$pdf->Cell(130 ,5,'Kadakkarapally',0,0);
$pdf->Cell(25 ,5,'Date',0,0);
$pdf->Cell(34 ,5,$date,1);//end of line


$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);//end of line
  
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line  
//end of line
  }

//$pdf->Cell(25 ,5,'Customer ID',0,0);
//$pdf->Cell(34 ,5,'000',0,1);//end of line

//make a dummy empty cell as a vertical spacer
//$pdf->Cell(189 ,10,'',0,1);//end of line

//billing address
 while($row3=mysqli_fetch_array($exe2)){
           
        
              $name=$row3['username'];
$pdf->Cell(100 ,5,'Bill to',0,1);//end of line
     
 

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10 ,5,$user,0,0);
$pdf->Cell(90 ,5,'',0,1);



$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'',0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'',0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);


$pdf->Cell(30 ,5,'Product',1,0);
$pdf->Cell(25 ,5,'Unitcost',1,0);
$pdf->Cell(25 ,5,'Quantity',1,0);
     
     
$pdf->Cell(30 ,5,'Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

//$pdf->Cell(130 ,5,'Monthly Fee',1,0);
//$pdf->Cell(25 ,5,'',1,0);
//$pdf->Cell(34 ,5,'',1,1,'R');//end of line

      while($row1=mysqli_fetch_array($exe)){
          $tprice=$row1['tprice'];
      $date=$row1['date'];
       $time=$row1['time'];   
        
              $name=$row1['username'];
              $id=$row1['id'];
              $product=$row1['product_name'];
              $quantity=$row1['quantity'];
             $unitcost=$row1['unitcost'];
                                                             

$pdf->Cell(30 ,5,$product,1,0);
$pdf->Cell(25 ,5,$unitcost,1,0);
$pdf->Cell(25 ,5,$quantity,1,0);
          
$pdf->Cell(30 ,5,$tprice,1,1);//end of line

        }
//summary
//$pdf->Cell(130 ,5,'',0,0);
//$pdf->Cell(25 ,5,'',0,0);
//$pdf->Cell(25,5,'',1,1);
//end of line

       
$pdf->Output();
       
 }

?>