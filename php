  


             
    
                
              <!--CONTACT FORM START-->        
              <div class="col-lg-6 space-break">
                <div class="contact-form">
                    <form  method="post" action="action_reg.php" >
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input id="tname" type="text" name="name"  class="form-control customize"  required="required" ;> 
                                        <p id="p0"></p>
                 <script>
                 $("#tname").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z]{3,25}$') ) {
       $('#p0').hide();
    } else {
         $('#p0').show();
       $('#p0').text("* please enter a valid  name *"); 
         $('#tname').focus(); 
    }
  
});
    </script> 
                                         
                                        <div class="help-block with-errors"></div>
                                        <label class="errortext" style="display:nne; color:red" id="name_l"></label><br>
                                          
                                    </div>
                                </div>
                                
                                
                                
                                
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input id="form_image" type="file" name="image"  class="form-control customize" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input id="age" type="number" name="age" class="form-control customize"  data-error="required" required/>
                                         <p id="p5"></p>
                 <script>
                 $("#age").on("blur", function() {
                    
    if ( $(this).val() >= 18 && $(this).val() < 80 ) {
       $('#p5').hide();
    } else {
         $('#p5').show();
       $('#p5').text("* enter a valid value *");
        $("#age").focus();
        
    }
});
    </script>     
    
    
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>House Name</label>
                                        <input id="hname" type="text" name="house_name"  class="form-control customize"  required="required" data-error="required" required/>
                                        <p id="p1"></p>
                 <script>
                 $("#hname").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z]{3,16}$') ) {
       $('#p1').hide();
    } else {
         $('#p1').show();
       $('#p1').text("* please enter a valid value*");
        $("#hname").focus();
        
    }
});
    </script>   
                                         
                                            
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Place</label>
                                        <input id="pname" type="text" name="place" class="form-control customize"   data-error=" required." required/>
                                        <p id="p2"></p>
                 <script>
                 $("#pname").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z]{3,16}$') ) {
       $('#p2').hide();
    } else {
         $('#p2').show();
       $('#p2').text("* please enter a valid name *");
        $("#pname").focus();
        
    }
});
    </script>   
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Phone No</label>
                                        <input id="mob" type="number" name="phone"   class="form-control customize" required ; required/>
                                        
<p id="p9"></p>
                 <script>
                 $("#mob").on("blur", function() {
    if ( $(this).val().match('^[6-9][0-9]{9,9}$') ) {
       $('#p9').hide();
    } else {
         $('#p9').show();
       $('#p9').text("* please enter a valid mobile number *");
        $("#mob").focus();
        
    }
});
    </script>  

                                        <div class="help-block with-errors"></div>
                                       
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input id="email" type="email" name="email" class="form-control customize"  required="required" data-error="Valid email is required."   required/>
                                        
                   <p id="p8"></p>
       <script>
                 $("#email").on("blur", function() {
    if ( $(this).val().match('^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$') ) {
       $('#p8').hide();
    } else {
         $('#p8').show();
       $('#p8').text("*  Please enter valid email  *");
        $("#email").focus();
        
    }
});
    </script> 
                                        <div class="help-block with-errors"></div>
                                        
                                               
                                                 
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Adhar</label>
                                        <input id="form_image" type="file" name="adhar"  class="form-control customize" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input id="uname" type="text" name="username" class="form-control customize"  required="required" data-error=" required" required/>
                                         <p id="p6"></p>
       <script>
                 $("#uname").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z0-9]{6,16}$') ) {
       $('#p6').hide();
    } else {
         $('#p6').show();
       $('#p6').text("*  Please enter between 6 and 16 characters  *");
        $("#uname").focus();
        
    }
});
    </script> 
      
      
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input id="myInput" type="password" name="password" class="form-control customize"  required="required" data-error=" required" required/>
                                        <p id="p7"></p>
       <script>
                 $("#myInput").on("blur", function() {
    if ( $(this).val().match('(?=.*\d)(?=.*[a-zA-z])(?=.*[a-zA-Z]).{8,}') ) {
       $('#p7').hide();
    } else {
         $('#p7').show();
       $('#p7').text("*Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters*");
        $("#myInput").focus();
        
    }
});
    </script> 
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> ConfirmPassword</label>
                                        <input id="confirmpassword" type="password" name="confirmpassword" class="form-control customize"  onblur="return Validate()" required="required" data-error=" required" required/>
                                        
                                        <script type="text/javascript">
 function Validate() {
        var password = document.getElementById("confirmpassword").value;
        var confirmPassword = document.getElementById("myInput").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            myInput.focus();
        }
        return true;
    }
</script>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p><input type="submit" class="btn btn-custom" name="submit"  onclick="return validate()" value="Register"></p>
                                </div>
                            </div>
                        </div>
                    </form>  
                </div>
              </div>
             <!--CONTACT FORM END-->    
            </div>
        </div>
        
        
        
    </section>
    
   
                