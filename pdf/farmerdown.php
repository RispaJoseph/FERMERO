<?php
include('../dbconnection.php');


 
$sql="select * from reg where status='0'";
$exe=mysqli_query($con,$sql);
?>









<!DOCTYPE html>
<html lang="en-US" class="no-js">
	
<!-- Mirrored from quickdevs.com/templates/agrom/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2019 20:21:24 GMT -->
<head>
    <title>jsPDF</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<style>
        button
        {
             border-radius: 10px;
            width=10px;
            color:white;
            background-color:orange;
        }
		@CHARSET "UTF-8";
		.page-break {
			page-break-after: always;
			page-break-inside: avoid;
			clear:both;
		}
		.page-break-before {
			page-break-before: always;
			page-break-inside: avoid;
			clear:both;
		}
	</style>
 </head>
    
<body>
    
   
<button onclick="generate()">Generate PDF</button>
<div id="html-2-pdfwrapper" style='position: absolute; left: 20px; top: 50px; bottom: 0; overflow: auto; width: 600px'>
   
                          
                        

                    <form method="POST">
    
				<center><br><br>
				<table  align="center">
                    <thead>
						<tr>
                           
						<th style="font-size:20px;color:darkorange"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME</b></th>
                            
						<th style="font-size:20px;color:darkorange"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MOBILE </b></th>
                         <th style="font-size:20px;color:darkorange"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMAIL</b></th>
                            
						
						
						
                        </tr>

						</thead>&nbsp;&nbsp;&nbsp;
					
                        
						
						 <?php
						while($fetch=mysqli_fetch_array($exe))
						{
							?>
                   <tr> <td style="font-size:20px;" align="center">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fetch['username']?>
                    </td>
                      <td style="font-size:20px;" align="center">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fetch['phone']?>
                    </td>
                        <td style="font-size:20px;" align="center">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fetch['email']?>
                    </td>
						</tr>
							           
                                    <?php }?>
                    
					
							
							                                    
</table>

                   
                                                       					
							<td></td><td></td>

						<br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                					<?php
						
mysqli_close($con);
						?>
					
                        </center>
                  </form>
                </div>
              
                
                      <script src='dist/jspdf.min.js'></script>

<script>
var base64Img = null;
imgToBase64('octocat.png', function(base64) {
    base64Img = base64; 
});

margins = {
  top: 70,
  bottom: 40,
  left: 30,
  width: 550
};

                      
                      
                      
                    
                        
                        
			
                    
               
         generate = function()
{
	var pdf = new jsPDF('p', 'pt', 'a4');
	pdf.setFontSize(18);
	pdf.fromHTML(document.getElementById('html-2-pdfwrapper'), 
		margins.left, // x coord
		margins.top,
		{
			// y coord
			width: margins.width// max width of content on PDF
		},function(dispose) {
			headerFooterFormatting(pdf, pdf.internal.getNumberOfPages());
		}, 
		margins);
		
	var iframe = document.createElement('iframe');
	iframe.setAttribute('style','position:absolute;right:0; top:0; bottom:0; height:100%; width:650px; padding:20px;');
	document.body.appendChild(iframe);
	
	iframe.src = pdf.output('datauristring');
};
function headerFooterFormatting(doc, totalPages)
{
    for(var i = totalPages; i >= 1; i--)
    {
        doc.setPage(i);                            
        //header
        header(doc);
        
        footer(doc, i, totalPages);
        doc.page++;
    }
};

function header(doc)
{
    doc.setFontSize(30);
    doc.setTextColor(40);
    doc.setFontStyle('normal');
	
    if (base64Img) {
             
    }
	    
    doc.text("Farmer Details", margins.left + 200, 40 );
	doc.setLineCap(2);
	doc.line(3, 70, margins.width + 43,70); // horizontal line
};

// You could either use a function similar to this or pre convert an image with for example http://dopiaza.org/tools/datauri
// http://stackoverflow.com/questions/6150289/how-to-convert-image-into-base64-string-using-javascript
function imgToBase64(url, callback, imgVariable) {
 
    if (!window.FileReader) {
        callback(null);
        return;
    }
    var xhr = new XMLHttpRequest();
    xhr.responseType = 'blob';
    xhr.onload = function() {
        var reader = new FileReader();
        reader.onloadend = function() {
			imgVariable = reader.result.replace('text/xml', 'image/jpeg');
            callback(imgVariable);
        };
        reader.readAsDataURL(xhr.response);
    };
    xhr.open('GET', url);
    xhr.send();
};

function footer(doc, pageNumber, totalPages){

    var str = "Page " + pageNumber + " of " + totalPages
   
    doc.setFontSize(10);
    doc.text(str, margins.left, doc.internal.pageSize.height - 20);
    
};
             
             
              </script>
            </div>
        </div>
    </section>
    </div>
</body>
</html>