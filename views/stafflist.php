<div class="container">
<div class="text-center"><?php echo $this->session->flashdata('msg'); ?></div>
     <div class="collapse details" id="details"></div>
           <div class="col-md-12"><br>
           	<form action="<?php echo base_url(); ?>index.php/stf/stafflist/" method="get">
                    <div class="col-md-4">
            	<div class="row">
                    <div class="col-md-10">
                        <input type="number" name="query" class="form-control" placeholder="staff-phone/id" value="<?php echo $query; ?>">
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
                            <font size="+2">Staff-List</font>
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
          
        {
			?>
               <table class="table table-bordered">
               <tbody align="center" class="navbg">
           <tr class="text-danger">
                <td><b>S.No.</b></td>
                <td><b>Staff-Id:</b></td> 
               <td><b>Name:</b></td>
               <td><b>Date Of Joining:</b></td>
               <td><b>Address:</b></td>
               <td><b>Contact No.:</b></td>
               <td><b>Aadhar:</b></td>
               <td><b>Age:</b></td>
               <td><b>Salary:</b></td>
               <td><b>Profile:</b></td>
               <td><b>EDIT</b></td>
                    
                   </tr>
             
                     <tr>
                       <td>
                        <b>
        <?php 
          //echo $dept->dname;
          echo $i; 
        ?>
               </b> </td>
                     <td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['id']; 
				?></b>
                </td>
            	<td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['name']; 
				?></b>
                </td>
            	<td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['date']; 
				?>
              </b>  </td>
            	<td><b>
				<?php echo $regt['address'];?>
                <b></td>
                <td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['contact']; 
				?>
         </b>       </td>
                <td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['aadhar']; 
				?>
                </b></td>
                <td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['age']; 
				?>
                </b></td>
                <td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['salary']; 
				?>
                </b></td>
                <td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['profile']; 
				?>
            </b>    </td>
              <td><button class="btn btn-success"><a href="<?php echo base_url(); ?>index.php/stf/editstaff/<?php echo $regt['id']; ?>"><b>Modify</b></a></button></td>                   
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
                            </a>
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
