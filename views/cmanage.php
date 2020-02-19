<?php
				//print_r($array1)
				//foreach($array5 as $mail)
				//echo $mail['email'];
				//count($mail);
					?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Management</title>
</head>

<body>
<div class="row">
<div class="container-fluid">

<div class="col-md-12">
 <div class="col-md-4">
                <div class="panel-group">
            		<div class="panel panel-success">
                    	<div class="panel-heading"><h4 data-toggle="collapse" data-target="#panelcollapse" aria-expanded="true">Click to view ID/CONTACT</h4></div>
                        <div class="panel-body collapse" id="panelcollapse">
                        	<form action="<?php  echo base_url(); ?>index.php/manage/patientlist/" method="get">
                   
            	<div class="row">
                    <div class="col-md-6">
                        <input type="text" name="query" class="form-control" placeholder="patient-phone/id" value="<?php //echo $query; ?>">
                    </div>
                        <input type="submit" name="search" class="btn btn-success btn-sm">
                    </div>
                </div></form>
                        </div>
                    </div>
            	</div>
           <!--  <div class="col-md-4">
                <div class="panel-group">
            		<div class="panel panel-success">
                    	<div class="panel-heading"><h4 data-toggle="collapse" data-target="#panelcollapse">Click to view ID/CONTACT</h4></div>
                        <div class="panel-body collapse" id="panelcollapse">
                        	<form action="<?php  echo base_url(); ?>index.php/manage/patientlist/" method="get">
                   
            	<div class="row">
                    <div class="col-md-6">
                        <input type="text" name="query" class="form-control" placeholder="patient-phone/id" value="<?php //echo $query; ?>">
                    </div>
                        <input type="submit" name="search" class="btn btn-success btn-sm">
                    </div>
                </div></form>
                        </div>
                    </div>
            	</div>-->
            
           	 <div class="col-md-4">
                <div class="panel-group">
            		<div class="panel panel-success">
                    	<div class="panel-heading"><h4 data-toggle="collapse" data-target="#panelcollapse1">Click to view Details DATE</h4></div>
                        <div class="panel-body collapse" id="panelcollapse1">
                        	<form action="<?php  echo base_url(); ?>index.php/manage/patientlist/" method="get">
            	<div class="row">
                    <div class="col-md-6">
                        <input type="date" name="query" class="form-control" placeholder="patient-phone/id" value="<?php //echo $query; ?>">
                    </div>
                        <input type="submit" name="search" class="btn btn-success btn-sm">
                    </div>
                </div>
                </form>
                        </div>
                    </div>
            	</div>

 <!--appointment search by month-->
                  
                </div>
           
          
             	
            </div><!--end of search-->
          
            <!--<div class="col-md-2" style="float:left">
             <div class="btn-group btn-group-vertical my-edit">
                        <button type="button" class="btn btn-default btn-sm ">Default Button</button>
                        <button type="button" class="btn btn-info btn-sm ">Info Button</button>
                        <button type="button" class="btn btn-primary btn-sm ">Primary Button</button>
                        <button type="button" class="btn btn-warning btn-sm">Warning Button</button>
                        <button type="button" class="btn btn-danger btn-sm">Danger Button</button>
                        <button type="button" class="btn btn-success btn-sm">Success Button</button>
                        <button type="button" class="btn btn-link btn-sm">Link Button</button>
                </div><!-- //btn-group--></div>
<div class="row">
<div class="container-fluid">
<div class="col-md-1"></div>
<div class="col-sm-11">
 <div class="btn-group btn-group-horizontal my-edit " style="float:left; ">
                       
            	 <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#pops-modal0">TOTAL PATIENT<span class="badge"><?php echo($rowcount);?></span></button>
                
                <div id="pops-modal0" class="modal fade" role="dialog">
                	<div class="modal-dialog modal-lg">
                    	<div class="modal-content">
                        	<div class="modal-header">
                            	<button class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">Patient Details</h3>
                            </div><!-- //modal-header-->
                            <div class="modal-body">
                            	<section class="row">
<div class="container">

<div class="col-md-6">
<table border="2" class=" table table-responsive table-hover">
<tr>
   
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>City</th>
<th>Aadhar No.</th>
<th>Registration Date</th>
<th>Contact</th>
<th>Age</th>
<th>Purpose</th>
</tr>

<?php 
foreach($array3 as $new) {  ?>


<tr>
   
<td><?php echo $new['id'] ?></td>

<td><?php echo $new['first']?></td>

<td><?php echo $new['address'] ?></td>

<td><?php echo $new['city'] ?></td>

<td><?php echo $new['aadhar'] ?></td>

<td><?php echo $new['date'] ?></td>

<td><?php echo $new['contact'] ?></td>

<td><?php echo $new['age'] ?></td>

<td><?php echo $new['purpose'] ?></td>
</tr>

<?php }?>
</table>
</div>

</div>
</section>
                            </div><!-- //modal-body-->
                            <div class="modal-footer">
                            	<button class="btn btn-default btn-lg" data-dismiss="modal">Close Me</button>
                            </div><!-- //modal-footer-->
                        </div><!-- //modal-content-->
                    </div><!-- //modal-dialog-->
                </div><!-- //pops-modal-->
            

                       
                            
                        <button type="button" class="btn btn-info btn-md " data-toggle="modal" data-target="#pops-modal1">TOTAL STAFF<span class="badge"><?php echo($rowcount7);?></span></button>
                                       <div id="pops-modal1" class="modal fade" role="dialog">
                	<div class="modal-dialog" >
                    	<div class="modal-content">
                        	<div class="modal-header">
                            	<button class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">Staff Details</h3>
                            </div><!-- //modal-header-->
                            <div class="modal-body">
                            	<section class="row">
<div class="container">
<div class="col-md-6">
<table border="2" class=" table table-responsive table-hover">
<tr>
   
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>Contact</th>
<th>Salary</th>
<th>profile</th>
</tr>
<?php  foreach($array7 as $new) {  ?>


<tr>
   
<td><?php echo $new['id'] ?></td>

<td><?php echo $new['name']?></td>


<td><?php echo $new['address'] ?></td>

<td><?php echo $new['contact'] ?></td>

<td><?php echo $new['salary'] ?></td>

<td><?php echo $new['profile'] ?></td>
</tr>

<?php //$i=$i+1;
}?>
</table>
</div>
</div>
</section>
                            </div><!-- //modal-body-->
                            <div class="modal-footer">
                            	<button class="btn btn-default btn-lg" data-dismiss="modal">Close Me</button>
                            </div><!-- //modal-footer-->
                        </div><!-- //modal-content-->
                    </div><!-- //modal-dialog-->
                </div><!-- //pops-modal-->
            
                        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#pops-modal2">NEW PATIENT<span class="badge"><?php echo($rowcount1);?></span></button>
                        <div id="pops-modal2" class="modal fade" role="dialog">
                	<div class="modal-dialog modal-lg">
                    	<div class="modal-content">
                        	<div class="modal-header">
                            	<button class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">New Patient Details</h3>
                            </div><!-- //modal-header-->
                            <div class="modal-body">
                            	<section class="row">
<div class="container">

<div class="col-md-6">
<table border="2" class=" table table-responsive table-hover">
<tr>
    
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>City</th>
<th>Aadhar No.</th>
<th>Registration Date</th>
<th>Contact</th>
<th>Age</th>
<th>Purpose</th>
</tr>
<?php 
foreach($array1 as $new) {  ?>


<tr>
    
<td><?php echo $new['id'] ?></td>

<td><?php echo $new['first'] .$new['last']?></td>

<td><?php echo $new['address'] ?></td>

<td><?php echo $new['city'] ?></td>

<td><?php echo $new['aadhar'] ?></td>

<td><?php echo $new['date'] ?></td>

<td><?php echo $new['contact'] ?></td>

<td><?php echo $new['age'] ?></td>

<td><?php echo $new['purpose'] ?></td>
</tr>

<?php   }?>
</table>
</div>

</div>
</section>
                            </div><!-- //modal-body-->
                            <div class="modal-footer">
                            	<button class="btn btn-default btn-lg" data-dismiss="modal">Close Me</button>
                            </div><!-- //modal-footer-->
                        </div><!-- //modal-content-->
                    </div><!-- //modal-dialog-->
                </div><!-- //pops-modal-->
                        <button type="button" class="btn btn-warning btn-md"  data-toggle="modal" data-target="#pops-modal3">TODAY CASE REVIEW<span class="badge"><?php echo($rowcount4);?></span></button>
                             <div id="pops-modal3" class="modal fade" role="dialog">
                	<div class="modal-dialog">
                    	<div class="modal-content">
                        	<div class="modal-header">
                            	<button class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">Today Case Review Details</h3>
                            </div><!-- //modal-header-->
                            <div class="modal-body">
                            	<section class="row">
<div class="container">
<div class="col-md-6">
<table border="2" class=" table table-responsive table-hover">
<tr>
    
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>Registration Date</th>
<th>Contact</th>
<th>Purpose</th>
<th>Review Date</th>
</tr>
<?php  foreach($array4 as $new) {  ?>
<tr>
    
<td><?php echo $new['p_id'] ?></td>

<td><?php echo $new['first']?></td>

<td><?php echo $new['address'] ?></td>

<td><?php echo $new['rdate'] ?></td>

<td><?php echo $new['contact'] ?></td>

<td><?php echo $new['purpose'] ?></td>

<td><?php echo $new['rewdate'] ?></td>
</tr>

<?php  }?>
</table>
</div>
</div>
</section>
                            </div><!-- //modal-body-->
                            <div class="modal-footer">
                            	<button class="btn btn-default btn-lg" data-dismiss="modal">Close Me</button>
                            </div><!-- //modal-footer-->
                        </div><!-- //modal-content-->
                    </div><!-- //modal-dialog-->
                </div><!-- //pops-modal-->                                   
                        <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#pops-modal4">TOTAL CASE REVIEW<span class="badge"><?php echo($rowcount5);?></span></button>
                        <div id="pops-modal4" class="modal fade" role="dialog">
                	<div class="modal-dialog modal-md">
                    	<div class="modal-content">
                        	<div class="modal-header">
                            	<button class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">Total Case Review Details</h3>
                            </div><!-- //modal-header-->
                            <div class="modal-body">
                            	<section class="row">
<div class="container">
<div class="col-md-6">
<table border="2" class=" table table-responsive table-hover">
<tr>
   

<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>Registration Date</th>
<th>Contact</th>
<th>Purpose</th>
<th>Review Date</th>
</tr>

<?php  foreach($array5  as $new) {  ?>

<tr>
    
<td><?php echo $new['p_id'] ?></td>

<td><?php echo $new['first']?></td>

<td><?php echo $new['address'] ?></td>

<td><?php echo $new['rdate'] ?></td>

<td><?php echo $new['contact'] ?></td>

<td><?php echo $new['purpose'] ?></td>

<td><?php echo $new['rewdate'] ?></td>
</tr>

<?php  }?>
</table>
</div>
</div>
</section>
                            </div><!-- //modal-body-->
                            <div class="modal-footer">
                            	<button class="btn btn-default btn-lg" data-dismiss="modal">Close Me</button>
                            </div><!-- //modal-footer-->
                        </div><!-- //modal-content-->
                    </div><!-- //modal-dialog-->
                </div><!-- //pops-modal-->
                        <button type="button"  class="btn btn-success btn-md" data-toggle="modal" data-target="#pops-modal5" >Payment<span class="badge">
                            <?php 
                       
                            echo($rowcount8);
                        
                        ?></span></button>
                         <div id="pops-modal5" class="modal fade" role="dialog">
                	<div class="modal-dialog">
                    	<div class="modal-content">
                        	<div class="modal-header">
                            	<button class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">Payment_deatails</h3>
                            </div><!-- //modal-header-->
                            <div class="modal-body">
                            	<section class="row">
<div class="container">
<div class="col-md-6">
<table border="2" class=" table table-responsive table-hover">
<tr>
<th>Id</th>
<th>Name</th>
<th>Total</th>
<th>Pay</th>
</tr>
<?php   foreach($array10 as $new) {  ?>

<tr>
    <td><?php echo $new['p_id']?></td>


 <td><?php echo $new['first'] ?> <?php echo $new['last']?></td>   

<td><?php echo $new['total']?></td>


<td><?php echo $new['pay'] ?></td>
</tr>
<?php   }?>

</table>
</div>
</div>
</section>
                            </div><!-- //modal-body-->
                            <div class="modal-footer">
                            	<button class="btn btn-default btn-lg" data-dismiss="modal">Close Me</button>
                            </div><!-- //modal-footer-->
                        </div><!-- //modal-content-->
                    </div><!-- //modal-dialog-->
                </div><!-- //pops-modal-->
                        <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#pops-modal6">CONTACT<span class="badge"><?php echo($rowcount);?></span></button>
                        <div id="pops-modal6" class="modal fade" role="dialog">
                	<div class="modal-dialog">
                    	<div class="modal-content">
                        	<div class="modal-header">
                            	<button class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">Contact Details</h3>
                            </div><!-- //modal-header-->
                            <div class="modal-body">
                            	<section class="row">
<div class="container">
<div class="col-md-6">
<table border="2" class=" table table-responsive table-hover">
<tr>
<th>ID</th>
<th>Name</th>
<th>Contact</th>
</tr>
<?php foreach($array3 as $new) {  ?>

<tr>
    
<td><?php echo $new['id'] ?></td>

<td><?php echo $new['first']?></td>


<td><?php echo $new['contact'] ?></td>

</tr>
<?php }?>

</table>
</div>
</div>
</section>
                            </div><!-- //modal-body-->
                            <div class="modal-footer">
                            	<button class="btn btn-default btn-lg" data-dismiss="modal">Close Me</button>
                            </div><!-- //modal-footer-->
                        </div><!-- //modal-content-->
                    </div><!-- //modal-dialog-->
                </div><!-- //pops-modal-->
                </div><!-- //btn-group-->
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12" style="float:left;">
<div class="jumbotron text-center">

           
           
  <h1>Clinic Management System</h1>
  <p>Record of Clinic</p> 
</div>
<div class="col-sm-1"></div>
<div class="col-sm-2">
      <h4>No. of Patient </h4>
   <button type="button" class="btn btn-success"> <?php 
	  echo  date('Y-m-d');
		 ?><span class="badge"><?php echo($rowcount1);?></span>
 </button>
      </div>
      <div class="col-sm-2">
      <h4>No. of Patient </h4>
   <button type="button" class="btn btn-danger">MONTH <?php 
	  echo   date('Y-m');
		 ?>   <span class="badge"><?php echo($rowcount2);?></span>
 </button>
      </div>
      <div class="col-sm-2">
      <h4>No. of Patient </h4>
   <button type="button" class="btn btn-primary" style="size:+2;">YEAR <?php 
	  echo   date('Y');
		 ?><span class="badge"><?php echo($rowcount3);?></span>
 </button>
      </div>
       <div class="col-sm-2"> 
       <h4>No. ofStaff </h4>
   <button type="button" class="btn btn-primary" style="size:+2;">YEAR <?php 
	  echo   date('Y');
		 ?><span class="badge"><?php echo($rowcount7);?></span>
 </button>
      </div>
        <div class="col-sm-2"> 
       <h4>Transaction </h4>
   <button type="button" class="btn btn-primary" style="size:+2;">Rs<?php 
         ?><span class="badge"><?php foreach ($array8 as $key => $value) {
      # code...
    echo implode(',', $value) ;
  } ?></span>
 </button>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
   
</div><!--end of row-->
</div><!--end of container-->

</div>
</div><!--end of row-->
</div>
</div><!-- end of container-->
<center><span class="glyphicon glyphicon-download btn btn-success btn-lg"><a target=\_blank\ href="<?php echo base_url();?>index.php/manage/cmanage_print" class="" >Print</a></span></center>
</div>

</body>
</html>