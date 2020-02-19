<div class="container">
<center><h1>CLINIC MANAGEMENT SYSTEM</h1></center>
<div class="row">
<h2>Date:<?php echo date("l jS\of F Y ");?></h2>
<center><h3>PATIENT DETAILS</h3></center>

<table  width="200" border="1" style="align:center;">
<tr class="text-danger" >
<th>S.No</th>
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>City</th>
<th>Registration Date</th>
<th>Contact</th>
<th>Age</th>
<th>Purpose</th>
</tr>
<?php $i=1; 
foreach($array1 as $new) {  ?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $new['id'] ?></td>

<td><?php echo $new['first']?> <?php $new['last']?></td>

<td><?php echo $new['address'] ?></td>

<td><?php echo $new['city'] ?></td>

<td><?php echo $new['date'] ?></td>

<td><?php echo $new['contact'] ?></td>

<td><?php echo $new['age'] ?></td>

<td><?php echo $new['purpose'] ?></td>
</tr>

<?php }?>

</table>


<div class="row">
	<center><h3>PAYMENT DETAILS</h3></center>
<table  width="200" border="1" style="align:center;">
<tr >
<th>S.No</th>
<th>ID</th>
<th>Name</th>
<th>TOTAL</th>
<th>PAY</th>
<th>DUE</th>
<th>PAYMENT-date</th>

</tr>

<?php 
$i=1;

foreach($array8 as $new) {  ?>
<tr>
	<td><?php echo $i; ?></td>
<td><?php echo $new['id'] ?></td>

<td><?php echo $new['first'] ."-". $new['last']?></td>

<td><?php echo $new['total'] ?></td>

<td><?php echo $new['pay'] ?></td>

<td><?php echo $new['due'] ?></td>

<td><?php echo $new['insdate'] ?></td>
</tr>

<?php $i=$i+1; }?>

</table>

</div>
</div>
</div>