<section class="container">
 <div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Reminder</font>
                        </div>
                        <div class="panel-body">
		<div class="row">
           <div col-md-12>
           	<?php
				//$i=1;
				foreach($array as $regt)
				{
			?>
               <table class="table table-bordered">
               <tbody align="center" class="navbg">
              <tr class="text-danger"> 		
               
                <td><b>PATIENT ID:</b></td> 
              		 <td><b>FIRST NAME:</b></td>
                     <td><b>LAST NAME:</b></td>
                     <td><b> ADDRESS:</b></td>
                   	<td><b>CONTACT:</b></td>
                 	 <td><b>PURPOSE</b></td>
                    <td><b>NEXT-APPOINTMENT:</b></td>
                     <td><b>SEND SMS:</b></td>
                   
                   
                     </tr>
             
                     <tr>
                      <td><b>
        <?php 
          //echo $dept->dname;
          //echo $i; 
        ?>
               </b> </td>
                     <td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['p_id']; 
				?>
               </b> </td>
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
				<?php 
					//echo $dept->dname;
					echo $regt['address']; 
				?>
                </b></td>
            	<td><b>
				<?php echo $regt['contact'];?>
                </b></td>
                <td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['purpose']; 
				?>
                </b></td>
                <td><b>
				<?php 
					//echo $dept->dname;
					echo $regt['rewdate']; 
				?>
         </b>       </td>
                <td>
        
         <button type="button"> <a href="<?php echo base_url(); ?>index.php/review/message/<?php echo $regt['contact']; ?>"><span class="text-success"  style="color: black;">SEND</span></a></button>
 </td> 
        
                
		
                
                       </tr>
         
            <?php 
		//$i=$i+1;
    		}
				//print_r($pagefilters);
//				$pagefilters=http_build_query($pagefilters);
//				if($pagefilters!=""){
//					$pagefilters="?".$pagefilters;
				//}
				//if($pages>1)
				//{
			?>
            <tr>
            	<td colspan="8">
                	<?php 
						//echo $paging;
					?>
					<?php /*?><ul class="pagination">
                    
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
                   <!--  <div>  <button class="btn btn-success">	<a href="<?php //echo base_url(); ?>index.php/review/email">send via Mail</a></button>
                    or
                      <button class="btn btn-success">	<a href="<?php //echo base_url(); ?>index.php/review/message">send via Sms</a></button></div> -->
                </td>
              </tr>
             
            </tbody>
            
          </table>
                 
            <?php
						//}
			?>

             
     </div><!--end pof panel body-->
   </div>
         </div>
       </div><!-- end of container-->
   			</div><!-- end of panel body-->
 		</div> <!--- end of main panel-->
 		
</section><!--end of section-->