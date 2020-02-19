<div class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></div>

<div class="container-fluid">
<div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Registraion Form</font>
                        </div>
                        <div class="panel-body">
                        <form  class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/review/update_rev/<?php echo $regt['id'];?>/<?php echo $regt['p_id'];?>">
       
            <table class="table table-striped">
            <tbody><th>
            <input type="text" name="user_id"  class="hidden" value="<?php echo $this->session->userdata('user_id');?>"  required="true">
               <div class="form-group">
               
                  <label class="control-label col-md-2">PATIENT_ID </label>
                  <div class="col-md-1">
                    <input type="text" name="p_id" value="<?php echo $regt['p_id'] ;?>" placeholder="Enter Name" class="form-control" readonly onKeyPress="return ValidateAlpha(event);" required="true" >
                  </div>
                  <div class="col-md-1" ></div>
                   <label class="control-label col-md-2">FIRST-NAME </label>
                  <div class="col-md-2">
                    <input type="text" name="first" value="<?php echo $regt['first'] ;?>" placeholder="Date Of Joining" class="form-control"  required="true">
                  </div>
           
                      <label class="control-label col-md-2">LAST-NAME </label>
                  <div class="col-md-2">
                    <input type="text" name="last" placeholder="last name" value="<?php echo $regt['last']?>" class="form-control" required="true">
                  </div>
                  </div>
               </div>
           <div class="form-group">
              
                  <label class="control-label col-md-2">CONTACT: </label>
                  <div class="col-md-3">
                    <input type="text" name="contact" value="<?php echo $regt['contact'];?>" readonly  class="form-control" placeholder="contact" required="true">
                  </div>
                  <div class="col-md-1"></div>
              <label class="control-label col-md-2" id="status">STATUS: </label>
             <div class="col-md-3">
            <label class="radio-inline"><input type="radio" id="pending" value="pending" name="status" required >pending</label>
             <label class="radio-inline"><input type="radio" id="solved" value="solved" name="status" required >Solved</label>
           </div>
                  <div class="col-md-1"></div>
           </div>
              <div class="form-group">
              
                  <label class="control-label col-md-2">NEXT APPOINTMENT: </label>
                  <div class="col-md-3">
                    <input type="date" name="rewdate" value="<?php echo $regt['rewdate']; ?>" class="form-control"   required="true">
                  </div>
                 
                  <div class="col-md-1"></div>
           </div>
       <!--  <div class="form-group">
                  <label class="control-label col-md-2">TOTAL </label>
                  <div class="col-md-3">
                    <input type="text" name="total" value="<?php// echo $regt['total']?>" maxlength="12"  class="form-control" placeholder="TOTAL" required="true" onkeypress="return isNumberKey(event) ">
                  </div>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2">PAY:</label>
                  <div class="col-md-3">
                    <input type="text"  name="pay" value="<?php //echo $regt['pay']?>" placeholder="PAY" class="form-control" onkeypress="return isNumberKey(event) ">
                  </div>
                   <div class="col-md-1"></div>
                   <label class="control-label col-md-2">DUE:</label>
                  <div class="col-md-3">
                    <input type="text" name="due" value="<?php //echo $regt['due']?>" placeholder="DUE" class="form-control" onkeypress="return isNumberKey(event) ">
                  </div>
                  <div class="col-md-1"></div>    
               </div> -->
      
           </th>
             </tbody>
             </table>                           
                                           <table align="center">
                                           <td>
                                           <button type="submit" class="btn btn-success" name="update_rev">Submit</button></td>
                                       
                                       </table>
                                       </div>
                                       </div>
                                        
                                       
 </form>
    
    </div><!--end of container-->
    