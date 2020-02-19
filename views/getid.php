<div class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></div>
<div class="container">
<div class="tab-pane">
             <div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Case Review</font>
                        </div>
                        <div class="panel-body">
       <div class="row"> <div class="col-md-2"> </div>
                                    <div class="col-md-8">
                                    <form method="post" action="<?php echo base_url(); ?>index.php/review/getcid/">
                        
                                        <table class="table table-bordered">
                                     <div class="form-group">
                            <label class="col-md-4 control-label">Patient-ID</label>
                            <div class="col-md-4 inputGroupContainer">
                               <div class="input-group">
                               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               <input  name="id" placeholder="Patient-Id" class="form-control"  value="<?php //echo $payment['id']; ?>" type="number"></div>
                            </div>
                                          <!--  <tbody><tr>
                                                <th width="14%"><span class="glyphicon glyphicon-user"></span>  Enter Customer ID</th>
                                                <td width="20%"><input type="text" name="id" required class="form-control">
                                                </td>
                                            </tr>-->
                                       
                                           <table align="center">
                                           <tr><td>
                                           <button type="submit" class="btn btn-success" name="review">Submit</button></td>
                                           </tr>
                                           
                                       </table>
                                       <!-- </tbody>-->
                                        </table>
                                        </form>
                                        </div>
                                        </div>
                         </div>
                    </div>
        </div>
  </div>      
</div><!-- container -->


