<!DOCTYPE html>
<html>
	<head>
		<title>Book Details</title>
		<link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>

<body>
 <div id="wrapper">
 
 <?php include 'heading.php'; ?>
     	
		 <hr class="featurette-divider">
			<div class="container">
				<div class="row">
						<div class="class">
							<div class="col-md-3">
									<a href="bookregister.php" class="btn btn-primary" role="button">Add Book</a>
							</div>
						</div>
					<div class="col-md-12">
					<?php 
		
			@$update_message =$_REQUEST['update_messagge'];
			@$delete_message = $_REQUEST['delete_message'];
		?>
		
					<?php if(!empty($delete_message == 'success')) { ?>
						<div class="alert alert-success ">
							
							<?php
								echo "Record Deleted Successfully";	
							?>
						</div>
					<?php } ?>
					
					<?php if(!empty($delete_message == 'error')) { ?>
						<div class="alert alert-danger ">
							
							<?php
								echo "Something went wrong while deleing the record";	
							?>
						</div>
					<?php } ?>
				
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
				
					<h2>Book List</h2>
							<table>
								<tr>
								<th>Id</th>
								<th>Book Name</th>
								<th>Author</th>
								<th>Edition</th>
								<th>Publication</th>
								<th colspan="2">Action</th>
								</tr>	
								
						
								
<?php
require_once 'connection.php';


    $sql = "SELECT * FROM `books`";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()) {
			echo "<tr>
				<td>" . $row["id"]. "</td><td>" . $row["bookname"]. "</td><td>" . $row["author"]. "</td><td>" .$row["edition"] ."</td><td>" . $row["publication"]. "</td>
				<td><a href='bookupdate.php?edit=".$row['id']."'>Edit</a></td>
				<td><a href='bookdelete.php?del=". $row['id']."'>Delete</a></td>
				</tr>";
		}
	} else {
		echo "0 results";
	}
	
$conn->close();
?>
			
		</table>
	</div>	
	</div>
	</div>	
 </div>
</body>
</html>