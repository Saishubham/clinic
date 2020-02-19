<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="container mt-5">
	<div class="row">	
		<div class="col-md-12">
			<div class="card">
				<h1 class="page-header text-center">CodeIgniter Sending Sms</h1>
				<div class="row">
                  <div class="col-sm-4 col-sm-offset-4">
					<?php /*?><?php if (validation_errors()): ?>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Error!</strong> <?php echo validation_errors(); ?>
						</div>
					<?php endif ?><?php */?>

					<?php if ($this->session->userdata('update_status')): ?>
						<?php echo $this->session->userdata('update_status'); ?>
					<?php endif ?>
					<form action="<?php echo base_url(); ?>index.php/review/sendsms" method="POST">
						<div class="form-group">
                        
							<label for="sendTo">Send to: </label>
							<input type="text" name="sendTo" id="sendTo" class="form-control" placeholder="" required="required" value="<?php echo $result['contact']?>">
                            
						</div>

						<div class="form-group">
							<label for="message">Message: </label>
							<textarea name="message" id="message" class="form-control" rows="3" cols="8" required placeholder="Enter your message" readonly>Dear <?php echo $result['first'] ?> <?php echo $result['last'] ?>. This message is to remind you that  you have to visit Soham Laxmi Dental Clinic & Sojal Implant Center on date <?php echo date("d-m-Y",strtotime(" +1 day"));?> for your treatment .   with regards Dr.Jitendra Kumar ,Soham Laxmi Dental Clinic & Sojal Implant Center.9905760849</textarea>
						</div>

						<div class="form-group">
							<button class="btn btn-secondary" type="reset">Reset</button>
							<button class="btn btn-primary" type="submit">Send</button>
						</div>
					</form>
                   </div>
                  </div> 
				</div>
			</div>
		</div>
        
    </div>
   

	<!-- Footer -->
	
