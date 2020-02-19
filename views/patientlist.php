<div class="container-fluid">
<div class="text-center"><?php echo $this->session->flashdata('msg'); ?></div>
     <div class="collapse details" id="details"></div>
           <div class="col-md-12"><br>
           	<form action="<?php echo base_url(); ?>index.php/regt/patientlist/" method="get">
                    <div class="col-md-4">
            	<div class="row">
                    <div class="col-md-10">
                        <input type="number" name="query" class="form-control" placeholder="patient-phone/id" value="<?php echo $query; ?>">
                    </div>
                        <input type="submit" name="search" class="btn btn-success btn-sm">
                    </div>
                </div>
            </form>
           </div>
           <br><div class="row">
           <div col-md-12>
           		<div class="container-fluid">
                
 						<div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">PATIENT-RECORDS</font>
                        </div>
                        <div class="panel-body">
                        <?php
				//print_r($array);
				if(empty($array)){
					echo "<div class='alert alert-danger glyphicon glyphicon-ban-circle'><strong>No Record Found Or Input Mismatch</strong></div>";
				}
				else{	
          $i=1;
				foreach($array as $regt)
          //$l=count($array);

                    

        {
			?>
               <table class="table table-bordered table-responsive-sm-md-lg-xl">
               <tbody align="center" class="navbg">
        
           <tr class="text-danger">
                <td><b>Sl.No</b></td>
                <td><b>Patient-Id:</b></td> 
               <td><b>Patient First Name:</b></td>
               <td><b>Patient Last Name:</b></td>
               <td><b>Patient Address:</b></td>
               <td><b>Patient Contact:</b></td>
               <td><b>Patient Age:</b></td>
               <td><b>Picture</b></td>
               <td><b>Patient Aadhar:</b></td>
               <td><b>Patient Email:</b></td>
               <td><b>Purpose:</b></td>
               <td><b>Modify:</b></td>
                <td><b>Delete:</b></td>
                 <td><b>Re-Visit:</b></td>
               
                    
                   </tr>

           
                     <tr>
                       <td><b>
        <?php 
          echo $i;
        ?></b>
                </td>
                     <td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['id']; 
				?></b>
                </td>
            	<td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['first']; 
				?>
                </b></td>
            	<td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['last']; 
				?>
                </b></td>
            	<td><b>
				<?php echo $regt['address'];?>
                </b></td>
                <td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['contact']; 
				?>
                </b></td>
                <td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['age']; 
				?>
                </b></td>
                 <td  style="width:130px; height:80px;text-align:center; vertical-align:middle">
					<?php if(empty($regt['picture'])) { echo '<B> Sorry <br> NO Image Found</B>';}
						else{?>
     <img src="<?php echo base_url(); ?>Assets/uploads/<?php echo $regt['picture']; ?> " class="zoom img-thumbnail" >
   <?php  } ?>
                </td>
                <td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['aadhar']; 
				?>
                </b></td>
                <td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['email']; 
				?>
                </b></td>
                <td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['purpose']; 
				?>
                </b></td>
              <td><button class="btn btn-success"> <a  href="<?php echo base_url(); ?>index.php/regt/editpatient/<?php echo $regt['id']; ?> "><span  style="color: white;"><b>Modify</b></span></a></button></td> 
              <td>
               <button class="btn btn-success">  <a   href="<?php echo base_url(); ?>index.php/regt/delete_single_user/<?php echo $regt['id']; ?> "><span class="" style="color: white;"><b>Delete</b></span></a></button></td>
               

 <td>
               <button class="btn btn-success">  <a href="<?php echo base_url(); ?>index.php/regt/print_pref2/?id=<?php echo $regt['id']; ?> "><span  style="color: white;"><b>Print</b></span></a></button></td>
          </tr>
         
            <?php 
            $i=$i+1;
        }
				//print_r($pagefilters);
				$pagefilters=http_build_query($pagefilters);
				if($pagefilters!=""){
					$pagefilters="?".$pagefilters;
				}
				if($pages>1){
			?>
            <tr>
            	<td colspan="8">
                	<?php 
						echo $paging;
					?><?php /*?><ul class="pagination">
                    
                	<?php
						for($i=1;$i<=$pages;$i++){
					?>
                    	<li class="page-item">
                        	<a class="page-link" 
                            href="<?php echo base_url(); ?>index.php/regt/customerlist/page/<?php echo $i; ?>/<?php echo $pagefilters; ?>"><?php */?>
								<?php // echo $i; ?>
                            
                       <!-- </li>
                   	
                    </ul>-->
                </td>
            </tr>
            </tbody>
          </table>
            <?php
						}
				}
			?>
            
     </div><!--end pof panel body-->
     </div></div>
    </div>
            </div>
            </div>
             </div>
             
      </div><!--end of row-->
       </div><!--- end of second container-->
        </div>
<!--end of main container--><br><br>


