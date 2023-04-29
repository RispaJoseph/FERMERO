<?php
//call the FPDF library
include('../session.php');
  require('fpdf.php');
     $con=mysqli_connect("localhost","root","","agri3");


    $user=$_SESSION['sess'];
   

   
$s="select * from payment where name='$user'";
$e=mysqli_query($con,$s)or die( mysqli_error($con));

while($row1=mysqli_fetch_array($e)){
          $tprice=$row1['tprice'];
       $date =  date("Y-m-d");
        
              $name=$row1['name'];
            
              $product=$row1['magazine'];
              $quantity=$row1['months'];
             $unitcost=$row1['unitcost'];
    $id=$row1['id'];
      
    $house_name=$row1['house_name'];
}
//create pdf object
$pdf = new FPDF('P','mm','A4');

//add new page
$pdf->AddPage();
//output the result
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130 ,5,'AGROM',0,0);
$pdf->Cell(59 ,5,'INVOICE',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'Panchayat Building',0,0);
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
$pdf->Cell(45 ,5,$date,1);//end of line


$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);//end of line


$pdf->Cell(25 ,5,'Customer ID:',0,0);
$pdf->Cell(34 ,5,$id,0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//billing address
$pdf->Cell(100 ,5,'Bill to',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10 ,5,$name,0,0);
$pdf->Cell(90 ,5,'',0,1);


$pdf->Cell(10 ,5,$house_name,0,0);
//$pdf->Cell(90 ,5,$adress,0,1);

$pdf->Cell(10 ,5,'',0,0);
//$pdf->Cell(90 ,5,$contact,0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(30 ,5,'Name',1,0);
$pdf->Cell(40 ,5,'Magazine',1,0);
$pdf->Cell(30 ,5,'Unitcost',1,0);//end of line
$pdf->Cell(30 ,5,'Months',1,0);
$pdf->Cell(35 ,5,'Total',1,1);
$pdf->SetFont('Arial','',12);



                                      

$pdf->Cell(30 ,5,$name,1,0);
$pdf->Cell(40 ,5,$product,1,0);
     $pdf->Cell(30 ,5,$unitcost,1,0);    
$pdf->Cell(30 ,5,$quantity,1,0);
      
$pdf->Cell(35 ,5,$tprice,1,1);//end of line

       



$pdf->Output();
       

?>