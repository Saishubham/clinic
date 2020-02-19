<div class="container">
<div class="text-center"><?php echo $this->session->flashdata('msg'); ?></div>
     <div class="collapse details" id="details"></div>
           <div class="col-md-12"><br>
           	<form action="<?php echo base_url(); ?>index.php/review/getptdisplay/" method="get">
                    <div class="col-md-5">
            	<div class="row">
                    <div class="col-md-6">
                        <input type="text" name="query" class="form-control" placeholder="search-by" value="<?php echo $query; ?>">
                    </div>
                        <input type="submit" name="search" class="btn btn-success btn-sm">
                    </div>
                </div>
            </form>
           </div>
           <br><div class="row">
           <div col-md-12>
           		<div class="container">
					<div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Report</font>
                        </div>
                        <div class="panel-body">
                        <?php
				//print_r($array);
					if(empty($array)){
					echo "<div class='alert alert-danger glyphicon glyphicon-ban-circle'><strong>   Sorry.. No Record Found or Invalid Input</strong></div>";
				}
				else{
          $i=1;
				foreach($array as $patients)
          

        {
			?>
               <table class="table table-bordered table-responsive">
               <tbody align="center" class="navbg">
              <tr class="text-danger">  
                     <td><b>S.No.</td>
                     <td><b>PATIENT ID:</b></td>
                     <td><b>FIRST-NAME:</b></td>
                     <td><b>LAST-NAME:</b></td>
                     <td><b>REGISTRATION-DATE:</b></td>
                      <td><b>CONTACT:</b></td>
                    <?php /*?><td>DOB</td>
                    <td>Address:</td><?php */?>
                    <td><b>CHEIF COMPLAINT:</b></td>
                    <td><b>STATUS</b></td>
                    <td><b>NEXT APPOINTMENT</b></td>
                    <td><b>PAYMENT-HISTORY</b></td>
                    <td><b>UPDATE</b></td>
                    <td><b>DELETE</b></td>
                   </tr>
             
                     <tr>
                      <td><b><?php echo $i;?></b></td>
            	<td><b>
				<?php 
					//echo $dept->dname;
					echo $patients['p_id']; 
				?>
                </td>
            	<td><b>
				<?php 
					//echo $dept->dname;
					echo $patients['first']; 
				?>
                </td>
                   	<td><b>
				<?php 
					//echo $dept->dname;
					echo $patients['last']; 
				?>
               </b> </td>
                <td><b>
				<?php echo $patients['rdate'];?>
      </b>
                </td>
                  <td>
                    <b>
				<?php echo $patients['contact'];?>
                </b></td>
               <?php /*?> /*<td>
				<?php 
					//echo $dept->dname;
					echo $patients['dob']; 
				?>
                </td>
                <td>
				<?php 
					//echo $dept->dname;
					echo $patients['address']; 
				?>
                </td>*/?>
                  <td><b>
				<?php 
					//echo $dept->dname;
					echo $patients['purpose']; 
				?>
                </b></td>
                 
                 
                 <td><b>
        <?php 
          //echo $dept->dname;
          echo $patients['status']; 
        ?>
                </b></td>
                <td><b>
        <?php 
          //echo $dept->dname;
          echo $patients['rewdate']; 
        ?>
                </b></td>
                  <td>
        
         <button type="button"> <a href="<?php echo base_url(); ?>index.php/payment/getptdisplay/?query=<?php echo $patients['p_id']; ?>"><span class="text-success"  style="color: black;">CLICK ME</span></a></button>
 </td> 
               <td>
        
         <button type="button"> <a href="<?php echo base_url(); ?>index.php/review/edit_rev/<?php echo $patients['id']; ?>/<?php echo $patients['p_id'];?>"><span class="text-success"  style="color: black;">UPDATE</span></a></button>
 </td> 
  <td class="text-danger">
              <button type="button"> <a href="<?php echo base_url(); ?>index.php/review/delete_single_rev/<?php echo $patients['id']; ?>/<?php echo $patients['p_id'];?> "><span class="text-success"  style="color: black;">Delete</span></a></button>
 </td> 
        
               
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
<!--end of main container-->