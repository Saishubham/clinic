<section>
<div class="container">
    
  
      
	<div class="row">
    <div class="col-md-12 ">
   <h1 align="center" class="text-primary">Welcome </h1>
    <h1 align="center" class="text-danger">Soham Laxmi Dental Care & Sojal Implant Center</h1>
    <h1 align="center" class="text-danger"> Clinic Management System</h1>
    <h2 align="center" class=" text-success">Powered By Shubham Kumar</h2>
    <h3 align="center" class="text-warning">contact:+91-9304435571</h3>
    
    		</div>
    </div>
 </div>
 


         <div class="col-md-3">
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
           
          
                
            </div><!--end of search-->
             <div class="col-md-3">
                <div class="panel-group">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4 data-toggle="collapse" data-target="#panelcollapse" aria-expanded="true">Click to view ID/CONTACT</h4>
                        </div>
                        <div class="panel-body collapse" id="panelcollapse">
                          <form action="<?php  echo base_url(); ?>index.php/manage/patientlist/" method="get">
                   <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="query" class="form-control" placeholder="patient-phone/id" value="<?php //echo $query; ?>">
                    </div>
                        <input type="submit" value="Go" name="search" class="btn btn-success btn-sm">
                    </div>
                </div>
            </form>
                        </div>
                    </div>
                </div>
</section>

