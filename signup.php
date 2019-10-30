<!DOCTYPE html>
<html>
<head>
	<meta lang="en" />
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>user login</title>
	<link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
 <?php include 'header.php';  ?>
	<div class="cointainer">
		<div class="row">
			<div class="col-md-12">
					<div class="col-md-12">
						<?php
							@$message =$_REQUEST['messagge'];	
						?> 
			
					
				<?php if(!empty($message == 'success')){ ?>
				<div class="alert alert-success">
				<?php
					echo "Thanks for register with us !.";
				?></div>
				<?php } ?>
				
				<?php if(!empty($message == 'error')) { ?>
				<div class="alert alert-danger">
					<?php 
					echo "Something went wrong !.";
					?></div>
				<?php } ?>
							 
							 
				
				<form action="newtable.php" class="form-signin" method="POST">
				   <p><h3>User Detail</h3></p>
				   <label>Name</label>
					<input name="name" type="name" placeholder="Name" class="form-control" required /><br>
					<label>Email</label>
					<input name="email" type="email" placeholder="email" id="inputEmail" class="form-control" required /><br>
			   	    <label>Username</label>
					<input name="username" type="username" placeholder="Username" class="form-control" required /><br>
					<label>Password</label>
					<input name="password" type="password" placeholder="Password" class="form-control" required /><br>
					<button class="btn  btn-primary" type="submit" >Save</button><br>
				</form>
			</div>
		</div>
	</div>
	
      
</div>
</div>
</body>
</html>
