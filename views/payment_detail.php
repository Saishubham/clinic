<div class="container">
  <?php //print_r($array2);?>
<div class="text-center"><?php echo $this->session->flashdata('msg'); ?></div>
     <div class="collapse details" id="details"></div>
           <div class="col-md-12"><br>
           	<form action="<?php echo base_url(); ?>index.php/payment/getptdisplay/" method="get">
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
					<div class="panel panel-danger">
                        <div class="panel-heading">
                            <font size="+2">Payment-Report</font>
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
                  <td><b>S.No</b></td>
                  <td><b>Name</b></td>
               <td><b>patients Id:</b></td>
                    <td><b>Payment_date:</b></td>
                    <td><b>Total</b></td>
                    <td><b>Pay</b></td>
                    <td><b>Due</b></td>
                      <td><b>Update</b></td>
                       <td><b>Delete</b></td>
                   </tr>
             
                     <tr>
                      
                      <td>
      <b> <?php 
          echo $i;
        
      
        ?></b>
                </td>

                      <td>
      <b> <?php echo $patients['first']?>&nbsp;<?php echo $patients['last']
        
      
        ?></b>
                </td>
            	<td>
			<b>	<?php 
					//echo $dept->dname;
      $patients['id'];
					echo $patients['p_id']; 
				?></b>
                </td>
                 <td><b>
        <?php 
          //echo $dept->dname;
          echo $patients['insdate']; 
        ?></b>
                </td>
           
            <td><b>
        <?php 
          //echo $dept->dname;
          echo $patients['total']; 
        ?></b>
                </td>
                   <td><b>
        <?php 
          //echo $dept->dname;
          echo $patients['pay']; 
        ?>
               </b> </td>
                 <td>
                  <b>
        <?php 
          //echo $dept->dname;
          echo $patients['due']; 
        ?>
                </b></td>
                </td>
              <td class="text-danger">
               <button type="button" class="btn-btn-danger"> <a style="color: black;" href="<?php echo base_url(); ?>index.php/payment/editpay/<?php echo $patients['id']; ?>" ><span class="text-success"  style="color: black;">Edit</span></a></button>
              </td> 
              <td class="text-danger">
              <button type="button"> <a href="<?php echo base_url(); ?>index.php/payment/delete_single_rec/<?php echo $patients['id']; ?>/<?php echo $patients['p_id'];?> "><span class="text-success"  style="color: black;">Delete</span></a></button>
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