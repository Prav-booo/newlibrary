<?php
require_once 'connection.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Update </title>
		<link href="bootstrap.min.css" rel="stylesheet">
		<link href="ie10-viewport-bug-workaround.css" rel="stylesheet">
		<script src="ie-emulation-modes-warning.js"></script>
		<link href="style.css" rel="stylesheet">
	</head>
<body>

	<div id="wrapper">
	<?php include 'heading.php'; ?>
	  <div class="container">
		<div class="row">
			<div class="col-md-12">
				<hr class="featurette-divider">
				<div class="col-md-12">
					
							 
					<form action="bookupdateform.php" method="POST" class="form-sigin">
							<div class="alert alert-info alert-dismissible" id="myAlert" >
								<a href="bookdetails.php" class="close">&times;</a>
									<h3>Update Book Details</h3>
							</div>   
						<?php
						
						@$id = $_REQUEST['edit'];
						
						if (isset($id) && !empty($id)) {
							
							$select = "SELECT * FROM books WHERE id ='".$id."'" ;
							
							$result = mysqli_query($conn, $select);
							
							if(mysqli_num_rows($result) > 0) {
								while ($row = mysqli_fetch_array($result)) { 
								
								?>
							<label><h5>Book Name</h5></label><br>
							<input name="id" type="hidden" class="form-control" value="<?php echo $row['id']; ?>"  placeholder="id" /><br>
								<input name="bookname" type="text" class="form-control" value="<?php echo $row['bookname']; ?>"  placeholder="Book Name" />
							<label><h5>Eamil</h5></label><br>	
								<input name="author" type="text" class="form-control" value="<?php echo $row['author']; ?>" placeholder="Author" />
							<label><h5>Username</h5></label>	
								<input name="edition" type="text" class="form-control" value="<?php echo $row['edition']; ?>" placeholder="Edition" />
							<label><h5>Password</h5></label>	
								<input name="publication" type="text" class="form-control" value="<?php echo $row['publication']; ?>" placeholder="Publication" /><br>
								<button class="btn btn-lg btn-primary" type="submit" >Update</button><br>
						   

				<?php
			} 
		}
	}
	
	mysqli_close($conn);  
?>
					
					</form>
				</div>
			</div>
		</div>
	</div>		

</body>
</html>
