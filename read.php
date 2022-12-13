<?php include "php/read.php"; ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>HOME</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"><script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style1.css">
	<script> 
		$(document).ready(function(){
			$("#myInput").on("keyup",function(){
				var value =$(this).val().toLowerCase();
				$("#myTable tr").filter(function(){
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
	</script>
	</head>
	<body>
					<br><br><br>
		            <center><h3>MY BILLS</h3></center>
					<br>
                    <center> <div class="navBar">
                        <button type="button" class="btn btn-outline-primary"><a href="index1.php">+Add Biller</a></button>
						<input type="text" id="myInput" placeholder="search here">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Filter
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                        <li><a href="#">Biller Name</a></li>
                        <li><a href="#">Amount</a></li>
                        <li><a href="#">Due Date</a></li>
                    </ul>
					<a href="logout.php" class="btn btn-danger">Logout</a>
                    </center>
                </div>
            </div>
			<style>
				body {
  					background-image: url("images/bg_4.jpg");
  					background-repeat: no-repeat;
  					background-attachment: fixed;  
  					background-size: cover;
					}
			</style>
            <div class="container">
		<div class="box">
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">No.</th>
			      <th scope="col">Biller Name</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Type</th>
                  <th scope="col">Due Date</th>
                  <th scope="col">Remarks</th>
                  <th scope="col">Actions</th>
			    </tr>
			  </thead>
			  <tbody id="myTable">
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['billername']?></td>
			      <td><?php echo $rows['amount']; ?></td>
                  <td><?php echo $rows['billtype']; ?></td>
                  <td><?php echo $rows['duedate']; ?></td>
                  <td><?php echo $rows['remarks']; ?></td>
			      <td>
					<a href="update.php?id=<?=$rows['id']?>" 
					   class="btn btn-success" >Update</a>

					<a href="php/delete.php?id=<?=$rows['id']?>" 
					   class="btn btn-danger" >Delete</a>
				  </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>

    </div>
  </div>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

