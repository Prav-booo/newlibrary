<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Register </title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <link href="style.css" rel="stylesheet">
</head>
<body>
	<div id="wrapper">
			<?php include 'heading.php';  ?>
		<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php 
					
						@$update_message =$_REQUEST['update_messagge'];
						
					?>
					
							
					
						<?php if(!empty($update_message == 'success')){ ?>
						<div class="alert alert-success">
						<?php
							echo "Record Update Successfully";
						?></div>
						<?php } ?>
						
						<?php if(!empty($update_message == 'error')) { ?>
						<div class="alert alert-danger">
							<?php 
							echo "Something went wrong while updating record.";
							?></div>
						<?php } ?>
							 
						<form class="form-signin" method="POST" action="database.php">
						<div class="alert alert-success alert-dismissible" id="myAlert">
						  <a href="userlist.php" class="close">&times;</a>
							
							<h4>Book Register</h4>
						</div>
								
						<input type="name" name="bookname" class="form-control" placeholder="Book Name" required /> <br>
						<input type="author" name="author" class="form-control" placeholder="Author" required  /> <br>
						<input type=" number" name="edition" class="form-control" placeholder="Edition" required /><br>
						<input type="publication" name="publication" class="form-control" placeholder="Publication" required /><br>
						
						<button class="btn  btn-primary" type="submit" >Save</button><br>
						</form>	
					</div>
					</div>
				</div>
		</div>
		
		
		
	  
	  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>