<div class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></div>
<div class="container">
<div class="panel">
             <div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">CHECK APPOINTMENT </font>
                        </div>
                        <div class="panel-body">
                      <div class="row"> 
                         <div class="col-md-12">
                                    <form method="post" action="<?php echo base_url(); ?>index.php/search/getappoint/">
                         <div class="form-group">
                            <label class="col-md-3 control-label">Date from</label>
                            <div class="col-md-3 inputGroupContainer">
                               <div class="input-group">
                               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               <input  name="date_from" placeholder="Patient-Id" class="form-control"  value="<?php //echo $payment['id']; ?>" type="date"></div>
                            </div>
                            <br>
                     </div>
                     <div class="form-group">
                            <label class="col-md-3 control-label">Date to</label>
                            <div class="col-md-3 inputGroupContainer">
                               <div class="input-group">
                               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               <input  name="date_to" placeholder="Patient-Id" class="form-control"  value="<?php //echo $payment['id']; ?>" type="date"></div>
                            </div>
                          </div>
                           <div class="col-md-12">
                                 <div class="form-group">      
                                           <button type="submit" class="btn btn-success" name="getappoint">Submit</button> </div>
                                
                                   </div>
                                     </form>
                        </div>
                         </div>
                    </div>
       
  </div> 
</div>
</div>  
<!-- container -->


