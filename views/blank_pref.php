<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<header>
<!--top strip-->
<!-- navbar-->
</header>
<!--<section class="contact-bann">
	<span><img src="images/Contact Us.jpg" alt="contact banner" class="img-responsive"></span>
</section>-->
<style type="text/css">
    .im_width img{

        width: 1000px;
        height: auto;
        position: relative;
        margin-top: 5px;
    }
    .def_mar{
        margin-top: 5px;
    }



</style>
<style media="print">

    @page {
            margin:10px 10px;
            size:8.27in 11.69in ;
            height:3508px;
            width:2480px;
            size: auto;   auto is the initial value 
            margin:0;   this affects the margin in the printer settings 
            -webkit-print-color-adjust:exact;
            border-color:rgb(10.10.0.0);
            border: 2px;
    }
    @media print{
        table {page-break-inside: avoid;}
        #button{ display:none;}
    }
        
</style>    
<body>

<div class="text-center"><div class="text-center"><?php //echo $this->session->flashdata('msg'); ?></div></div>

        <div  class="row">
                  <div class="container">         

                            
                             <div class="im_width">   <img src="<?php echo base_url(); ?>Assets/images/upper.jpg" class="img-responsive"></div>
                                                 <!--         <td rowspan="" colspan=""><h3 style="margin:8px 0 0 63px;"><span style="margin-left:-39px;"><img src="images/cropped-wise-dental-logo.png" class="img-thumbnail"</h3></td>
                                <td rowspan="2" colspan="5"><h3 style="margin:8px 0 0 63px;"><strong class="text-success">Soham Laxmi Dental Clinic & Sojal Implant Center</strong></h3>
                                    <h5 style="margin-left:70px;"><strong class="text-danger">Dr. Jitendra Kuma</strong>r</h5>
                                   <h5 style="margin-left:70px;"><strong class="text-danger">BDS,Patna</strong></h5></td>
                                    </td>                                  -->      
                      
                     </div>
                     <div class="container">
                    <div class="col-md-12 def_mar">
            <table class="table table-bordered table-responsive">

                 
                    <tr>
                        <td><b>Date:</b></td><td>................................</td>
                       <td><b>PT-ID</b></td> <td>.............................</td>
                  </tr>

                    <tr>
                     <td><b>Name</b></td> <td>................................ </td>
                      <td><b>Contact</b></td> <td>...........................</td>
                    </tr>
                   

                    </tr>
                    
                     <tr><td><b>Address</b></td> <td>.........................</td>
                        <td><b>Age</td> </b><td>......................</td>
                     </tr>
                     <tr>
                       <td><b>Cheif Complaint</b></td> <td>....................</td>
                       <td><b>Medical History</b></td><td><b>Heart/Sugar/Bleeding/Drug allergy/Other</b></td>
                     </tr>
               
                    </table>    
                  </div>
                 </div>
                 <div class="container">  <img src="<?php echo base_url(); ?>Assets/images/middle.jpg" class="img-responsive"></div>

                       <div class="container">         
                             <table class="table table-bordered table-responsive">
                    <tr>
                    <td width="90%"><p class="text-center"><strong>SLS Dental Implant Centre Formerly Named As Soham Laxmi Dental Care & Sojal Implant Centre</strong></p></td>
                    </tr>
                   
                    </table>
                </div>
              <center><button type="button" id="button" class="btn btn-danger" onClick="window.print();">print</button></center>
                    
                  

</body>
</html>
