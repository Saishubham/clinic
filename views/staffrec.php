<div class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></div>

<div class="container">
<div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Update Form</font>
                        </div>
                        <div class="panel-body">
                        <form  class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/stf/updatestaff/">
       
            <table class="table table-striped">
            <tbody><th>
            <input type="text" name="user_id"  class="hidden" value="<?php echo $this->session->userdata('user_id');?>" required="true">
               <div class="form-group">
                 <label class="control-label col-md-1">ID: </label>
                  <div class="col-md-1">
                    <input type="text" name="id" placeholder="" class="form-control" readonly=""onKeyPress="return ValidateAlpha(event);" value="<?php echo $array['id'] ?>" required="true" >
                  </div>
               
                  <label class="control-label col-md-1">Name: </label>
                  <div class="col-md-3">
                    <input type="text" name="name" placeholder="Enter Name" class="form-control" onKeyPress="return ValidateAlpha(event);" value="<?php echo $array['name'] ?>" required="true" >
                  </div>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-1">Date Of Joining: </label>
                  <div class="col-md-3">
                    <input type="date" name="date" placeholder="Date Of Joining" class="form-control" value="<?php echo $array['date'] ?>" required="true">
                  </div>
                  <div class="col-md-1"></div>
               </div>
           <div class="form-group">
              
                  <label class="control-label col-md-2">Address: </label>
                  <div class="col-md-3">
                    <input type="text" name="address"  class="form-control" placeholder="Address" value="<?php echo  $array['address']?>" required="true">
                  </div>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2">Contact No: </label>
                  <div class="col-md-3">
                    <input type="text" name="contact" maxlength="10" placeholder="contact Number" class="form-control" required="true" value="<?php echo $array['contact']?>" onkeypress="return isNumberKey(event) ">
                  </div>
                  <div class="col-md-1"></div>
           </div>
        <div class="form-group">
                  <label class="control-label col-md-2">Aadhar: </label>
                  <div class="col-md-3">
                    <input type="text" name="aadhar" maxlength="12"  class="form-control" placeholder="Aadhar" required="true" value="<?php echo $array['aadhar']?>" onkeypress="return isNumberKey(event) ">
                  </div>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2">Age:</label>
                  <div class="col-md-3">
                    <input type="text" maxlength="2" name="age" value="<?php echo $array['age']?>" placeholder="Optional" class="form-control" onkeypress="return isNumberKey(event) ">
                  </div>
                  <div class="col-md-1"></div>    
               </div>
           <div class="form-group">
                            <label class="control-label col-md-2">Salary: </label>
                            <div class="col-md-3">
                            <input type="text" name="salary" placeholder="Salary" class="form-control" value="<?php echo $array['salary']?>" required="true" onkeypress="return isNumberKey(event) ">
                            </div>
                            <div class="col-md-1"></div>
                            <label class="control-label col-md-2">Profile: </label>
                            <div class="col-md-3"  >
                            <input type="text" class="form-control" name="profile" value="<?php echo $array['profile']?>">
                        </div>
                          <div class="col-md-1"></div>
           </div>
           </th>
             </tbody>
             </table>                           
                                           <table align="center">
                                           <td>
                                           <button type="submit" class="btn btn-success" name="updatestaff">Submit</button></td>
                                       
                                       </table>
                                       </div>
                                       </div>
                                        
                                       
 </form>
    
    </div><!--end of container-->
    