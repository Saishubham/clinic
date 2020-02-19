<div class="text-center"><?php echo $this->session->flashdata('msg'); ?></div>

<?php //echo date('Y-m-d')?>
<div class="container">
 <div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Case Review</font>
                        </div>
                        <div class="panel-body">
                        <form method="post" action="<?php echo base_url(); ?>index.php/review/get_review/">
      <table class="table table-striped">
            <tbody>
            <tr><td>
             <input name="user_id" class="hidden" readonly value="<?php echo $_SESSION['user_id']; ?>" type="text">
            <div class="form-group">
              <label class="control-label col-md-2">Patient Id: </label>
              <div class="col-md-4">
              <input name="id" placeholder="customerid" class="form-control" readonly value="<?php echo $review['id']; ?>" type="text">
              </div>
              <div class="col-md-6"></div>
            </div></td></tr></tbody></table>
             <table class="table table-striped">
            <tbody>
            <tr><td>
               <div class="form-group">
                  <label class="control-label col-md-2">FIRST NAME: </label>
                  <div class="col-md-3">
                    <input type="text" name="first" placeholder="First Name" value="<?php echo $review['first']; ?>" class="form-control" readonly required="true">
                  </div>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2">LAST NAME: </label>
                  <div class="col-md-3">
                    <input type="text" name="last" placeholder="Last Name" value="<?php echo $review['last']; ?>"class="form-control" readonly required="true">
                  </div>
                  <div class="col-md-1"></div>
               </div></td></tr></tbody></table>
                <table class="table table-striped">
            <tbody>
               <tr><td>
           <div class="form-group">
                   <!--      <label class="control-label col-md-2">Registration Da: </label>
                  <div class="col-md-3">
                    <input type="date" name="date" readonly value="<?php //echo $review['date']; ?>" class="form-control" placeholder="mm/dd/yyyy"required="true">
                  </div> -->
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2">CONTACT: </label>
                  <div class="col-md-3">
                    <input type="text" name="contact" readonly placeholder="contact Number" value="<?php echo $review['contact']; ?>"class="form-control" required="true">
                  </div>
                  <div class="col-md-1"></div>
           </div></td></tr></tbody></table>
           <div class="form-group">
                            <label class="control-label col-md-2">ADDRESS: </label>
                            <div class="col-md-5">
                            <input type="text" name="address" placeholder="Address" class="form-control" required="true" value="<?php echo $review['address']?>" readonly>
                            </div>
                          
                           <label class="control-label col-md-2">REGISTRATION-DATE</label>
                           <div class="col-md-2">
                            <input type="date" name="rdate" placeholder="date" class="form-control" required="true" value="<?php echo $review['date']?>" >
                            </div>
                            <div class="col-md-1"></div>
                            <label class="control-label col-md-2"></label>
                           <div class="col-md-2">
                           
                            
                         </div
                          ><table class="table table-striped">
            <tbody>
                         <tr><td>
                     <div class="form-group">
                  <label class="control-label col-md-2">EMAIL: </label>
                  <div class="col-md-3">
                    <input type="text" name="email" value="<?php echo $review['email']; ?>" placeholder="Email" class="form-control" readonly required="true">
                  </div>
                  <div class="col-md-1"></div>
                   <label class="control-label col-md-2">PURPOSE: </label>
                  <div class="col-md-3">
                    <input type="text" name="purpose"  value="<?php echo $review['purpose']; ?>" class="form-control" required="true">
                  </div>
                  <div class="col-md-1"></div>
           </div></td></tr></tbody></table>
            <table class="table table-striped">
            <tbody>
           <tr><td>
           <div class="form-group" >
           <label class="control-label col-md-2" >NEXT APPOINTMENT: </label>
           <div class="col-md-3">
           <input type="date" id="rewdate" name="rewdate" value="" class="form-control">
           </div>
           <div class="col-md-1"></div>
          <label class="control-label col-md-2" id="status">STATUS: </label>
          <div class="col-md-3">
            <label class="radio-inline"><input type="radio" id="pending" value="pending" name="status" required >pending</label>
             <label class="radio-inline"><input type="radio" id="solved" value="solved" name="status" required >Solved</label>
           </div>
           <div class="col-md-1"></div>
           </div></td></tr></tbody></table>
     
             </tbody>
             </table> 

 <div class="panel panel-success">
                        <div class="panel-heading">
                            <font size="+2">PAYMENT-DETAIL</font>
                        </div>
                        <div class="panel-body">
       <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered">
                                            <tbody><tr>
                                                <th width="14%">TREATMENT-FEE</th>
                                                <td width="20%"><input type="text" name="t_amount" class="form-control" id="t_amount" onkeypress="return isNumberKey(event);" required="true" placeholder="Enter TREATMENT-FEE ">
                                                </td>
                                                <th width="14%">FEE</th>
                                                <td width="20%">
                                                  <input type="text" name="fee" class="form-control" id="fee" onkeypress="return isNumberKey(event);" required="true" placeholder="Fee">
                                                </td>
                                               
                                              <th>SUB-TOTAL</th>
                                                <td>
                                                  <input type="text" name="total" placeholder="SUB-TOTAL" id="total" class="form-control" onkeypress="return isNumberKey(event);" required="true">
                                                </td>
                                                 <th>PAY</th>
                                                <td>
                                                  <input type="text" name="pay" placeholder="PAY" id="pay" class="form-control" onkeypress="return isNumberKey(event);" required="true">
                                                </td>
                                            </tr>
                  <tr >
                                          <th width="14%">PAYMENT-DATE</th>
                                                <td width="15%">
                                                  <input type="date" name="insdate" class="form-control" required="true">
                                                </td>

                                           
                                                 <th width="14%">DUE</th>
                                                <td width="20%">
                                                  <input type="number" name="due" class="form-control" id="due" onkeypress="return isNumberKey(event);" required="true" placeholder="Due">
                                                </td>
                                        </tbody>
                                        </table>
                                        </div>
                         </div>
                         
    <table align="center">
   <tr>
   <td>
    <button type="submit" class="btn btn-success" name="rew">Submit</button></td>
               </tr>
                     </table>
                     
           
                      
						</div>
                        </div>
                         
                     
                    </div>
                     <script>
  $('#t_amount,#fee,#total,#pay,#due').on('keyup',amount);
    
  function amount(){
    var t_amount=parseInt($('#t_amount').val());
    var fee=parseInt($('#fee').val());
    var total=parseInt($('#total').val());
      var pay=parseInt($('#pay').val());
    var due=parseInt($('#due').val());
    if(isNaN(t_amount))t_amount=0;
    if(isNaN(fee))fee=0;
    if(isNaN(pay))pay=0;
    if(isNaN(total))total=0;
    if(isNaN(due))due=0;
    var total=(t_amount+fee);
    var due=(total-pay);
    //insamount+=pamount;
    //var restdue=t_amount-insamount;
     $('#total').val(total);
    $('#due').val(due);
    //$('#restdue').val(restdue);
    }
    </script>
   
<script type="text/javascript">
  $("#solved").click(function(){
  $("#rewdate").hide();
});

$("#pending").click(function(){
  $("#rewdate").show();
});
</script>