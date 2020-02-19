<div class="container">
 <div class="row">
 <div class="col-md-4">
  </div>
    <div class="col-md-4" id="login">
	   <div class="panel panel-primary">
		     <div class="panel-heading"><h4> Login</h4>	  </div>
			     <div class="panel-body">
	    <form method="post" class="bs-example bs-example-form" action="<?php echo base_url(); ?>index.php/login/validate_login/">
		<div class="input-group">
		   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		   <input type="text" name="username" placeholder="username" class="form-control">
         </div><!-- input group closed-->
         <br>
            <div class="input-group">
		   <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		   <input type="password" name="password" placeholder="password" class="form-control">
            </div> 
            
            <br>
            <div class="input-group">
            	<label class="checkbox-inline"><input type="checkbox" name="remember" value="1">Remember Me</label>
            </div> <br>
            <div class="input-group center-block">
			   <input type="submit" name="login" class="btn  btn-primary  center-block" value="Login" style="width:100%">
			 </div>
	   <div id="logstatus" style="visibility:none" class="text-danger">
	      
	   </div>
		
		</form>
		</div>
		</div>
	
	 </div>
	 
	<div class="col md-4"></div>
	</div><!-- row closed -->
 </div><!-- container closed -->