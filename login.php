
<!DOCTYPE html>
<html>
<head>
	<meta lang="en" />
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>User Login</title>
	<link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
 <?php include 'header.php';?> 

	<div class="cointainer">
		<div class="row">
			<div class="col-md-12">
				<form action="loginconn.php" class="form-signin" method="POST">
				   <p><h3>USER LOGIN</h3></p>
				   <label>Username</label>
					<input name="username" type="username" placeholder="Username" class="form-control" /><br>
					<label>Password</label>
					<input name="password" type="password" placeholder="Password" class="form-control" /><br>
					<button class="btn  btn-primary" type="submit" >login</button><br>
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>
