<div class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></div>

<div class="container">
<div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Registraion Form <?php echo$this->session->userdata('user_id')?></font>
                        </div>
                        <div class="panel-body">
                        <form  class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/regt/new_register/"  class="img-upl-validation" id="img-upl-validation" enctype="multipart/form-data" accept-charset="utf-8">
       
            <table class="table table-striped">
            <tbody><th>
                                <input type="text" class="hidden" name="user_id" placeholder="First Name" class="form-control" required="true" value="<?php echo$this->session->userdata('user_id')?>">

               <div class="form-group">
               
                  <label class="control-label col-md-2"> <sup style="color: red;">*</sup>First Name: </label>
                  <div class="col-md-3">
                    <input type="text" name="first" placeholder="First Name" class="form-control" required="true" onKeyPress="return ValidateAlpha(event);">
                  </div>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2"> <sup style="color: red;">*</sup>Last Name: </label>
                  <div class="col-md-3">
                    <input type="text" name="last" placeholder="Last Name" class="form-control" required="true" onKeyPress="return ValidateAlpha(event);">
                  </div>
                  <div class="col-md-1"></div>
               </div>
           <div class="form-group">
              
                  <label class="control-label col-md-2"> <sup style="color: red;">*</sup>Registration Date: </label>
                  <div class="col-md-3">
                    <input type="date" name="date" value="<?php echo date("Y-m-d") ?>" class="form-control" placeholder="mm/dd/yyyy"required="true">
                  </div>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2" ><sup style="color: red;">*</sup>Contact No: </label>
                  <div class="col-md-3">
                    <input type="text" maxlength="10" name="contact" placeholder="contact Number" class="form-control" required="true" onkeypress="return isNumberKey(event) ">
                  </div>
                  <div class="col-md-1"></div>
           </div>
        <div class="form-group">
                  <label class="control-label col-md-2">DOB </label>
                  <div class="col-md-3">
                    <input type="date" id="dob" name="dob"  class="form-control" placeholder="optional" onkeypress="return isNumberKey(event);">
                  </div>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2"> <sup style="color: red;">*</sup>Age:</label>
                  <div class="col-md-3">
                    <input type="text" name="age" id="age" onkeypress="return isNumberKey(event);" placeholder="Optional" class="form-control" >
                  </div>
                  <div class="col-md-1"></div>    
               </div>
           <div class="form-group">
                            <label class="control-label col-md-1"> <sup style="color: red;">*</sup>Address: </label>
                            <div class="col-md-2">
                            <input type="text" name="address" placeholder="Address" class="form-control" required="true">
                            </div>
                          
                           <label class="control-label col-md-2"> <sup style="color: red;">*</sup>City:</label>
                           <div class="col-md-2">
                            <input type="text" name="city" placeholder="City" class="form-control" required="true" onKeyPress="return ValidateAlpha(event);">
                            </div>
                       
                            <label class="control-label col-md-2"> <sup style="color: red;">*</sup>State:</label>
                           <div class="col-md-2">
                             <select name="state">
                          <option>------select------</option>
 						 <option value="Jharkhand">Jharkhand</option>
 						 <option value="Bihar">Bihar</option>
 						 <option value="Bengal">Bengal</option>
  						<option value="Uttarpradesh" selected>Uttarpradesh</option>
  						<option value="Uttrakhand" selected>Uttrakhand</option>
  						<option value="Chattisgarh" selected>Chattisgarh</option>
  						<option value="Maharastra" selected>Maharastra</option>
  					</select>
                            </div>
                            
                         </div>
                     <div class="form-group">
              
                  <label class="control-label col-md-2">Aadhar No.: </label>
                  <div class="col-md-3">
                    <input type="text" name="aadhar" onkeypress="return isNumberKey(event) " maxlength="12"  placeholder="Optional" class="form-control">
                  </div>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2">Email: </label>
                  <div class="col-md-3">
                    <input type="email" name="email" placeholder="Email/Optional" class="form-control">
                  </div>
                  <div class="col-md-1"></div>
           </div>
           <div class="form-group">
             <div class="col-md-2"></div>
             <sup>*</sup>
             <label class="control-label col-md-2">  <sup style="color: red;">*</sup>Purpose: </label>
                  <div class="col-md-4">
                    <input type="text" name="purpose" class="form-control" required="true" onKeyPress="return ValidateAlpha(event);">
                  </div>
                  <div class="col-md-2">Image</div>
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
    