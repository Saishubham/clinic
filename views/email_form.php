<div class="text-center"><?php echo $this->session->flashdata('msg'); ?></div>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Sending Email</title>
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">CodeIgniter Sending Email</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<?php
	         	if($this->session->flashdata('message')){
	         	?>
	         	<div class="alert alert-info text-center">
	            	<?php echo $this->session->flashdata('message'); ?>
	          	</div>
	          	<?php
	        }
	        ?>
			<form method="POST" action="<?php echo base_url(); ?>index.php/review/sendemail">
				<div class="form-group">
					<label>Subject:</label>
					<input type="text" class="form-control" value="revisit Dental clinic" name="subject">
				</div>
				<div class="form-group">
					<label>Message:</label>
					<input type="text" class="form-control" name="message" value="Dear Sir/Ma'am,   <br> This email is to remind you that  you have to visit <strong>Sohal Laxmi Dental Clinic & Sojal Implant Center</strong> clinic on <b>date <?php echo date("Y-m-d",strtotime(" +1 day"));?></b> for your case review .   <br> <br> with regards <br>Dr.twinkal jaiswal<br>BDS,MDS. <br>Sojal Laxmi Dental Clinic & Sojal Implant Center."></input>
				</div>
				<div class="form-group">
                <?php foreach ($array as $email){?>
					<label>Email:</label>
					<input type="text" class="form-control" name="email" value="<?php echo $email['email']?>">
                    <?php } ?>
				</div>
				<button type="submit" class="btn btn-primary">Send</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>