<div class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></div>

<div class="container-fluid">
<div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">REGISTRATION FORM <?php $this->session->userdata('user_id')?></font>
                        </div>
                        <div class="panel-body">
                        <form  class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/regt/new_register/"  class="img-upl-validation" id="img-upl-validation" enctype="multipart/form-data" accept-charset="utf-8">
       
            <table class="table table-striped">
            <tbody><th>
                                <input type="text" class="hidden" name="user_id" placeholder="First Name" class="form-control" required="true" value="<?php echo$this->session->userdata('user_id')?>">

               <div class="form-group">
               
                  <label class="control-label col-md-2"> <sup style="color: red;">*</sup>FIRST NAME: </label>
                  <div class="col-md-3">
                    <input type="text" name="first" placeholder="First Name" class="form-control" required="true" onKeyPress="return ValidateAlpha(event);">
                  </div>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2"> <sup style="color: red;">*</sup>LAST NAME: </label>
                  <div class="col-md-3">
                    <input type="text" name="last" placeholder="Last Name" class="form-control" required="true" onKeyPress="return ValidateAlpha(event);">
                  </div>
                  <div class="col-md-1"></div>
               </div>
           <div class="form-group">
              
                  <label class="control-label col-md-2"> <sup style="color: red;">*</sup>REGISTRATION DATE: </label>
                  <div class="col-md-3">
                    <input type="date" name="date" value="<?php echo date("Y-m-d") ?>" class="form-control" placeholder="mm/dd/yyyy"required="true">
                  </div>
                  <span id="contact_result"></span>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2" ><sup style="color: red;">*</sup>CONTACT: </label>
                  <div class="col-md-3">
                    <input type="text" maxlength="10" id="contact" name="contact" placeholder="contact Number" class="form-control" required="true" onkeypress="return isNumberKey(event) ">
                  </div>
                  <br>
                  <div class="col-md-3"></div>
           </div>
        <div class="form-group">
                  <label class="control-label col-md-2">D.O.B </label>
                  <div class="col-md-3">
                    <input type="date" id="dob" name="dob"  class="form-control" placeholder="optional" onkeypress="return isNumberKey(event);">
                  </div>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2"> <sup style="color: red;">*</sup>AGE:</label>
                  <div class="col-md-3">
                    <input type="text" name="age" id="age" onkeypress="return isNumberKey(event);" placeholder="Optional" class="form-control" >
                  </div>
                  <div class="col-md-1"></div>    
               </div>
           <div class="form-group">
                            <label class="control-label col-md-1"> <sup style="color: red;">*</sup>ADDRESS: </label>
                            <div class="col-md-2">
                            <input type="text" name="address" placeholder="Address" class="form-control" required="true">
                            </div>
                          
                           <label class="control-label col-md-2"> <sup style="color: red;">*</sup>CITY:</label>
                           <div class="col-md-2">
                            <input type="text" name="city" placeholder="City" class="form-control" required="true" onKeyPress="return ValidateAlpha(event);">
                            </div>
                       
                            <label class="control-label col-md-2"> <sup style="color: red;">*</sup>STATE:</label>
                           <div class="col-md-2">
                             <select name="state">
                          <option>------select------</option>
 						
 						 <option value="Bihar">Bihar</option>
 						 <option value="Bengal">Bengal</option>
  						<option value="Uttarpradesh" selected>Uttarpradesh</option>
  						<option value="Uttrakhand" selected>Uttrakhand</option>
  						<option value="Chattisgarh" selected>Chattisgarh</option>
  						<option value="Maharastra" selected>Maharastra</option>
               <option value="Jharkhand" selected>Jharkhand</option>
  					</select>
                            </div>
                            
                         </div>
                     <div class="form-group">
              
                  <label class="control-label col-md-2">AADHAAR/ID: </label>
                  <div class="col-md-3">
                    <input type="text" name="aadhar" onkeypress="return isNumberKey(event) " maxlength="12"  placeholder="Optional" class="form-control">
                  </div>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2">EMAIL: </label>
                  <div class="col-md-3">
                    <input type="email" name="email" placeholder="Email/Optional" class="form-control">
                  </div>
                  <div class="col-md-1"></div>
           </div>
           <div class="form-group">
             <div class="col-md-2"></div>
             <sup>*</sup>
             <label class="control-label col-md-2">  <sup style="color: red;">*</sup>CHEIF COMPLAINT: </label>
                  <div class="col-md-4">
                    <input type="text" name="purpose" class="form-control" required="true" onKeyPress="return ValidateAlpha(event);">
                  </div>
                  <div class="col-md-2    glyphicon glyphicon-camera">IMAGE</div>
                  <div class="col-md-">
                    <input type="file" name="picture" id="picture" class="filestyle" data-icon="false" data-buttontext="Choose image">
                  </div>
           </div>
           </th>
             </tbody>
             </table>                           
                                           <table align="center">
                                           <td>
                                           <button type="submit" class="btn btn-success" name="register">Submit</button></td>
                                       
                                       </table>
                                       </div>
                                       </div>
                                        
                                       
 </form>
    
    </div><!--end of container-->
    <!--  <script>
	$('#dob,#age').on('keyup',getage);
    
	function getage(){
		var today = new Date();
		var n = today.getFullYear();
		
		var dob = new Date($('#dob').val());
		var d=dob.getFullYear();
		
		var age=n-d;
		//var m = today.getMonth() - birthDate.getMonth();
		
		//var restdue=fin_amount-insamount;
		
		//$('#restdue').val(restdue);
		//var dob = '19800810';
		$('#age').val(age);
		}
    </script> -->
    <script type="text/javascript">
 $(document).ready(function(){
  $('#contact').change(function(){
   var contact = $('#contact').val();
   if(contact != ''){
    $.ajax({
     url: "<?php echo base_url(); ?>index.php/regt/checkcontact",
     method: "POST",
     data: {contact:contact},
     success: function(data){
      $('#contact_result').html(data);
     }
    });
   }
  });
 });
</script>