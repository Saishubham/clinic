<div class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></div>

<div class="container">
<div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Payment Update Form</font>
                        </div>
                        <div class="panel-body">
                        <form  class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/payment/updatepay/">
       
            <table class="table table-striped">
            <tbody><th>
            <input type="text" name="user_id"  class="hidden" value="<?php echo $this->session->userdata('user_id');?>" required="true">
               <div class="form-group">
                 <label class="control-label col-md-1">R_ID:</label>
                  <div class="col-md-1">
                    <input type="text" name="id" value="<?php echo $array['id']?>" placeholder="Enter Name" class="form-control" onKeyPress="return ValidateAlpha(event);" readonly >
                  </div>
               
                  <label class="control-label col-md-2">Patient_ID:</label>
                  <div class="col-md-3">
                    <input type="text" name="p_id" value="<?php echo $array['p_id']?>" placeholder="Enter Name" class="form-control" onKeyPress="return ValidateAlpha(event);" readonly >
                  </div>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2">Date Of Payment: </label>
                  <div class="col-md-2">
                    <input type="date" name="insdate" value="<?php echo $array['insdate']?>" placeholder="Date " class="form-control" readonly>
                  </div>
                  <div class="col-md-1"></div>
               </div>
           <div class="form-group">
              
                  <label class="control-label col-md-2">Total </label>
                  <div class="col-md-3">
                    <input type="text" name="total" value="<?php echo $array['total']?>"  class="form-control" placeholder="Address"required="true">
                  </div>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2">Pay: </label>
                  <div class="col-md-3">
                    <input type="text" name="pay" value="<?php echo$array['pay']?>" maxlength="10" placeholder="contact Number" class="form-control" required="true" onkeypress="return isNumberKey(event) ">
                  </div>
                  <div class="col-md-1"></div>
           </div>
        <div class="form-group">
                  <label class="control-label col-md-2">Due: </label>
                  <div class="col-md-3">
                    <input type="text" name="due"  maxlength="12" value="<?php echo $array['due']?>" class="form-control" placeholder="Aadhar" required="true" onkeypress="return isNumberKey(event) ">
                  </div>
                 
                  <div class="col-md-1"></div>    
               </div>
      
           </div>
           </th>
             </tbody>
             </table>                           
                                           <table align="center">
                                           <td>
                                           <button type="submit" class="btn btn-success" name="updatepay">Submit</button></td>
                                       
                                       </table>
                                       </div>
                                       </div>
                                        
                                       
 </form>
    
    </div><!--end of container-->
    