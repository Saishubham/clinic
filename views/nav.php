<div class="bgh">
<nav class="navbar">
 <a class="navbar-brand" style="margin-left:10px; size:30px; size:40px;" href="<?php  echo base_url();?>"><strong>Clinic Management System</strong></a>
      <div class="container-fluid">
      
        <div class="navbar-header menu">
          <button type="button btn-danger"  class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false" data-target="#site-menu">
          <span><a href="#">Menu</a></span>
          </button>
           </div>
           
        <!-- end of navbar-header-->
        
        <div class="collapse navbar-collapse" id="site-menu">
          <ul class="nav navbar-nav navbar-left" style="padding-top:50px;">
          <?php
				  	if($this->session->userdata('user_id')!==NULL){
						//echo //$this->session->user_id;
				  ?>
            <li class="<?php echo set_active("home"); ?>"> <a href="<?php echo base_url(); ?>index.php/home/"><span class="glyphicon glyphicon-home"><strong>Home</strong></span></a></li>
           <!-- <li class="<?php echo set_active("product"); ?>"> <a href="<?php echo base_url(); ?>index.php/review/"><span class="glyphicon glyphicon-home"><strong>product</strong></span></a></li> -->
            
            <li class=" <?php echo set_active("regt"); ?>"><a href="<?php echo base_url(); ?>index.php/regt/"><span class="glyphicon glyphicon-user"><strong>New-Patient</strong></span></a></li>

            
           
           <li class=" <?php echo set_active("stf"); ?>"><a href="<?php echo base_url(); ?>index.php/stf/"><span class="glyphicon glyphicon-user"><strong>New-Staff</strong></span></a></li>
           
           <li class=" <?php echo set_active("review/expiry"); ?>"><a href="<?php echo base_url(); ?>index.php/review/expiry/"><span class="glyphicon glyphicon-pushpin"><strong >Appointment</strong></span></a></li>

             <li class=" <?php echo set_active("payment/pay"); ?>"><a href="<?php echo base_url(); ?>index.php/payment/pay"><span class="glyphicon glyphicon-usd"><strong >Payment-History</strong></span></a></li>
           
           
           <li class=" <?php echo set_active("review/getid"); ?>"><a href="<?php echo base_url(); ?>index.php/review/getid/"><span class="glyphicon glyphicon-eye-open"><strong >Case-Review</strong><span></a></li>
           
            <li class=" <?php echo set_active("review/getptlist"); ?>"><a href="<?php echo base_url(); ?>index.php/review/getptlist/"><span class="glyphicon glyphicon-list"><strong>Patient-Detail</strong></span></a></li>
            
           <li class=" <?php echo set_active("regt/patientlist"); ?>"><a href="<?php echo base_url(); ?>index.php/regt/patientlist/"><span class="glyphicon glyphicon-list"><strong>Patient-Report </strong></span></a></li>
           
       <li class=" <?php echo set_active("stf/stafflist"); ?>"><a href="<?php echo base_url(); ?>index.php/stf/stafflist/"><span class="glyphicon glyphicon-list"><strong>Staff-Report </strong></span></a></li>
       
       <li class="<?php echo set_active("manage/cmanage");?>"><a href="<?php echo base_url();?>index.php/manage/cmanage"><span class="glyphicon glyphicon-globe"><strong>Management</strong></a></span></li>
          
          <li class="<?php echo set_active("Search");?>"><a href="<?php echo base_url();?>index.php/search/"><span class="glyphicon glyphicon-search"><strong>Search</strong></a></span></li>

           <li class="<?php echo set_active("regt/print_blank");?>"><a href="<?php echo base_url();?>index.php/regt/print_blank"><span class="glyphicon glyphicon-list"><strong>Blank</strong></a></span></li>
         
         <li class=" <?php echo set_active("login/logout"); ?>"><a href="<?php echo base_url();?>index.php/login/logout/"><span class="glyphicon glyphicon-log-out"><strong>logout</strong></span></a></li> 
         
         <?php }
		 
		 ?>  
           </ul>
        </div>
      </div>
    </nav>
    </div>