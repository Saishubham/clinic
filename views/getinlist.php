<div class="text-center"><?php echo $this->session->flashdata('msg'); ?></div>

<div class="container">
 <div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Patient-Detail</font>
                        </div>
                        <div class="panel-body">
                        <form action="<?php echo base_url(); ?>index.php/review/getinsdisplay/">
                            <div class="form-group">
                            <label class="col-md-4 control-label">Patient-ID/Phone</label>
                            <div class="col-md-4 inputGroupContainer">
                               <div class="input-group">
                               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               <input  name="query" placeholder="Customer-Id/phone" class="form-control"  value="<?php //echo $payment['id']; ?>" type="number"></div>
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