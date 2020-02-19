<div class="text-center"><?php echo $this->session->flashdata('msg'); ?></div>

<div class="container">
 <div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Payment-History</font>
                        </div>
                        <div class="panel-body">
                        <form action="<?php echo base_url(); ?>index.php/payment/getptdisplay/">
                            <div class="form-group">
                            <label class="col-md-3 control-label">Patient-ID</label>
                            <div class="col-md-4 inputGroupContainer">
                               <div class="input-group">
                               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               <input  name="query" placeholder="Patiend-ID" class="form-control"  value="" type="number"></div>
                            </div>
                         </div>
                     <input type="submit" name="search" class="btn btn-success btn-sm">
                       </form>
                        </div>
                    </div>
                </div>
           
                      
            </div>
       
     
         </div>
               </form>
        </div>
  </div><!-- end of container-->