<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>CODEINGNITER FILTER POST YEAR WISE</title>
  </head>
  <body>
    <div class="container">
	<div class="row">
	<div class="col-md-12 mt-5"><h1 class="text-center">CODEINGNITER FILTER POST YEAR WISE</h1><hr></div></div>
	<div class="row">
	<div class="col-md-3">
	<ul class="list-group">
	<?php 
	if (isset($years)){
		foreach($years as $value) {?>

       <li class="list-group-item "><a href="<?php echo base_url();?>posts/<?php echo $value->year;?>">
	   <?php echo $value->year;?>
	   </a>
	   </li>
	  <?php }
	}
	?>
    
    
</ul>
</div>
	<div class="col-md-8">
	<table class="table table-borderless">
	<thead>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Standard</th>
	<th>Percentage</th>
	<th>Result</th>
	<th>Date</th>
	</tr>
	</thead>
	<tbody>
	<?php 
	if (isset($posts)){
		foreach($posts as $value) {?>
       <tr>
	   <td><?php echo $value->id;?></td>
	   <td><?php echo $value->name;?></td>
	   <td><?php echo $value->standard;?></td>
	   <td><?php echo $value->percentage;?></td>
	   <td><?php echo $value->result;?></td>
	   <td><?php echo $value->created_at;?></td>
	   </tr>
	  <?php }
	}
	?>
	</tbody>
	</table>
	</div>
	</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>