<?php
require_once 'connection.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Update Details</title>
		<link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
<body>

	<div id="wrapper">
	<?php include 'heading.php'; ?>
	  <div class="container">
		<div class="row">
			<div class="col-md-12">
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
				
			<hr class="featurette-divider">
					<form action="updateform.php" method="POST" class="form-sigin">
						<div class="alert alert-primary alert-dismissible" >
						   <button class="close" type="button" data-dismiss="alert">&times;</button>
						   <h4>Update Your Profile</h4>
						</div>   
	<?php
	
	$id = $_REQUEST['edit'];
	
	if (isset($id) && !empty($id)) {
		
		$select_query = "SELECT * FROM user WHERE id ='".$id."'" ;
		
		$selectSQL = mysqli_query($conn, $select_query);
		
		if(mysqli_num_rows($selectSQL) > 0) {
			while ($row = mysqli_fetch_array($selectSQL)) { 
			
			?>
			<label><h5>Name</h5></label><br>
				<input name="id" type="hidden" class="form-control" value="<?php echo $row['id']; ?>"  placeholder="Name" /><br>
				<input name="name" type="text" class="form-control" value="<?php echo $row['name']; ?>"  placeholder="Name" /><br>
			<label><h5>Eamil</h5></label><br>	
				<input name="email" type="text" class="form-control" value="<?php echo $row['email']; ?>" placeholder="Email" /><br>
			<label><h5>Username</h5></label>	
				<input name="username" type="username" class="form-control" value="<?php echo $row['username']; ?>" placeholder="Username" /><br>
			<label><h5>Password</h5></label>	
				<input name="password" type="password" class="form-control" value="" placeholder="Password" /><br>
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

