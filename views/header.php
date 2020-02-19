<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/bootstrap/css/bootstrap.css">
       <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <script type="text/javascript" src="<?php echo base_url(); ?>Assets/bootstrap/js/jquery.min.js"></script>
         <script type="text/javascript" src="<?php echo base_url(); ?>Assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>Assets/bootstrap/js/typehead.js"></script>
         <script type="text/javascript" src="<?php echo base_url(); ?>Assets/bootstrap/js/webcam.min.js"></script>
         <script type="text/javascript" src="<?php echo base_url(); ?>Assets/bootstrap/js/counter.js"></script>
<script type="text/javascript">
    $(function () {
        $("#bankmode").change(function () {
            if ($(this).val() == "bank") {
                $("#bank").show();
            } else {
                $("#bank").hide();
            }
        });
    });
</script>
  <script>
function isNumberKey(evt){  <!--Function to accept only numeric values-->
    //var e = evt || window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode != 46 && charCode > 31 
	&& (charCode < 48 || charCode > 57))
        return false;
        return true;
	}
		   
    function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
         
        return false;
            return true;
    }
function myform(){
	alert("Sure ! your data is being submited successfully");
}
</script>
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>Assets/css/style.css">
        <style media="print">

	@page {
			margin:0 10px;
			/*size:8.27in 11.69in ;
			/*height:3508 px;
			width:2480 px;
			/*size: auto;   auto is the initial value */
			/*margin:0;   this affects the margin in the printer settings 
			-webkit-print-color-adjust:exact;*/
	}
	@media print{
		table {page-break-inside: avoid;}
		#buttons{
				display:block;
		}
		#invoice{
			margin-top:20px;
		}
	}
		
</style>

</script>
        <title>Clinic Management System| <?php echo $title; ?></title>
        
    </head>
    <body class="bg_color">