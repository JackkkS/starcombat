<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget password</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="header">
        <h2>Forget password</h2>
    </div>

    <form action="forget_db.php" method="post">
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Account / Change Account</div>
				<?php
					$query = $conn->query("SELECT * FROM `user` WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
				?>
				<br />
				<div class = "col-md-5">	
					<form method = "POST" action = "edit_query_account.php?id=<?php echo $fetch['id']?>">
						<div class = "form-group">
							<label>Username </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['username']?>" name = "username" />
						</div>
						<div class = "form-group">
							<label>Password </label>
							<input type = "password" class = "form-control" value = "<?php echo $fetch['password1']?>" name = "password1" />
						</div>
					    <div class = "form-group">
							<label>Email </label>
							<input type = "email" class = "form-control" value = "<?php echo $fetch['email']?>" name = "email" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "edit_account" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
         
    </form>

</body>
</html>