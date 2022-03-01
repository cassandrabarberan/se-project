<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
	<title>PHP CRUD Operation using PDO with Bootstrap/Modal</title>



</head>
<body>
	<?php require_once './pages/header.php'; ?>

<div class="container">
	<h1 class="page-header text-center">PHP CRUD Operation using PDO</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New</a>
            <?php 
                session_start();
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-info text-center" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
 
                    unset($_SESSION['message']);
                }
            ?>
			<table class="table table-bordered table-striped" style="margin-top:20px;">
				<thead>
					<th>ID</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Department</th>
					<th>Status</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
						//include our connection
						include_once('include/database.php');
 
						$database = new Connection();
    					$db = $database->open();
						try{	
						    $sql = 'SELECT * FROM employee, employee_workdetails';
						    foreach ($db->query($sql) as $row) {
						    	?>
						    	<tr>
						    		<td><?php echo $row['employee_ID']; ?></td>
						    		<td><?php echo $row['first_name']; ?></td>
						    		<td><?php echo $row['last_name']; ?></td>
						    		<td><?php echo $row['department']; ?></td>
									<td><?php echo $row['employment_status']; ?></td>
						    		<td>
						    			<a href="#edit_<?php echo $row['id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Edit</a>
						    			<a href="#delete_<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Delete</a>
						    		</td>
						    		<?php include('pages/edit_delete_modal.php'); ?>
						    	</tr>
						    	<?php 
						    }
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}
 
						//close connection
						$database->close();
 
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include('pages/add_modal.php'); ?>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>