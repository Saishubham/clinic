<div class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></div>

<div class="container">
<div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Registraion Form</font>
                        </div>
                        <div class="panel-body">
                        <form  class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/regt/updateinfo/" class="img-upl-validation" id="img-upl-validation" enctype="multipart/form-data" accept-charset="utf-8">
       
            <table class="table table-striped">
            <tbody><th>
            <div class="form-group">
                            <label class="col-md-3control-label">Patient-ID</label>
                            <div class="col-md-2 inputGroupContainer">
                               <div class="input-group">
                                 <input  name="id" placeholder="Patient-Id/phone" class="form-control"  value="<?php echo $regt['id']; ?>" readonly type="number">
                             </div>
                            </div>
                          </div>
               <div class="form-group">
               
                  <label class="control-label col-md-2">First Name: </label>
                  <div class="col-md-3">
                    <input type="text" name="first" placeholder="First Name" value="<?php echo $regt['first']; ?>" class="form-control" readonly required="true">
                  </div>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2">Last Name: </label>
                  <div class="col-md-3">
                    <input type="text" name="last" placeholder="Last Name" value="<?php echo $regt['last']; ?>" class="form-control" readonly required="true">
                  </div>
                  <div class="col-md-1"></div>
               </div>
           <div class="form-group">
              
                  <label class="control-label col-md-2">Registration Date: </label>
                  <div class="col-md-3">
                    <input type="date" name="date" value="<?php echo $regt['date']; ?>" class="form-control" placeholder="mm/dd/yyyy" readonly required="true">
                  </div>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2">Contact No: </label>
                  <div class="col-md-3">
                    <input type="text" name="contact" value="<?php echo $regt['contact']; ?>" placeholder="contact Number" class="form-control" required="true">
                  </div>
                  <div class="col-md-1"></div>
           </div>
        <div class="form-group">
              <div class="col-md-2"></div>
                  <label class="control-label col-md-2">DOB </label>
                  <div class="col-md-2">
                    <input type="date" name="dob" value="<?php echo $regt['dob']; ?>" class="form-control" placeholder="mm/dd/yyyy" readonly required="true">
                  </div>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2">Age:</label>
                  <div class="col-md-2">
                    <input type="text" name="age" value="<?php echo $regt['age']; ?>" placeholder="Optional" readonly class="form-control">
                  </div>
                  <div class="col-md-1"></div>    
               </div>
           <div class="form-group">
                            <label class="control-label col-md-1">Address: </label>
                            <div class="col-md-2">
                            <input type="text" name="address" placeholder="Address" value="<?php echo $regt['address']; ?>" class="form-control" required="true">
                            </div>
                          
                           <label class="control-label col-md-2">City:</label>
                           <div class="col-md-2">
                            <input type="text" name="city" placeholder="City" value="<?php echo $regt['city']; ?>" class="form-control" readonly required="true">
                            </div>
                            <div class="col-md-1"></div>
                            <label class="control-label col-md-2">State:</label>
                           <div class="col-md-2">
                            <input type="text" name="state" value="<?php echo $regt['state']; ?>" placeholder="State" readonly class="form-control" required="true">
                            </div>
                            
                         </div>
                     <div class="form-group">
              
                  <label class="control-label col-md-2">Aadhar No.: </label>
                  <div class="col-md-3">
                    <input type="text" name="aadhar" value="<?php echo $regt['aadhar']; ?>" placeholder="Aadhar No." class="form-control">
                  </div>
                  <div class="col-md-1"></div>

                   <label class="control-label col-md-2">Email: </label>
                  <div class="col-md-3">
                    <input type="email" name="email" value="<?php echo $regt['email']; ?>" placeholder="Email" class="form-control">
                  </div>
                  <div class="col-md-1"></div>
           </div>
           <div class="form-group">
             <div class="col-md-2"></div>
             <label class="control-label col-md-2">CHEIF COMPLAINT </label>
                  <div class="col-md-4">
                    <input type="text" name="purpose" value=" <?php echo $regt['purpose']; ?>" class="form-control"  required="true">
                  </div>
                  <div class="col-md-1"></div>
			   <div class="col-md-2    glyphicon glyphicon-camera">IMAGE</div>
			   <div class="col-md-">
				   <input type="file" name="picture" id="picture" value="<?php  echo base_url(); ?>Assets/uploads/<?php echo $regt['picture'];?>" class="filestyle" data-icon="false" data-buttontext="Choose image">
			   </div>
           </div>
           </th>
             </tbody>
             </table>                           
                                           <table align="center">
                                           <td>
                                           <button type="submit" class="btn btn-success" name="updateinfo">Submit</button></td>
                                       
                                       </table>
                                       </div>
                                       </div>
                                        
                                       
 </form>
    </div>
    </div>
    </div><!--end of container-->
