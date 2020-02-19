<section class="row">
<div class="container">
<div class="col-md-12">
<?php foreach($array as $mail) {  ?>
<table class="table table bordered">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
</tr>
<tr>
<td><?php echo $mail['id'] ?></td>
</tr>
<tr>
<td><?php echo $mail['first']?></td>
</tr>
<tr>
<td><?php echo $mail['email'] ?></td>
</tr>


</table><?php }?>
</div>
</div>
</section>