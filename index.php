<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link href='https://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<style>
			.logout, .logout:hover { 
				text-decoration: none;
				text-transform: uppercase;
				text-align:center;
				border:1px solid navy;
				padding:5px 20px;
				background-color:navy;
				color:white;
				box-shadow:0px 5px 8px navy;
			}
			
			.ourTitle {
				text-align: center;
				color: navy;
			}
			
			.navbar {
				-webkit-border-radius: 0;
				-moz-border-radius: 0;
				border: 1px solid navy;
				border-radius: 0;
				background: navy;
				color: white;
				
			}
		</style>
	</head>
<body style='font-family: "Ubuntu Mono", monospace;'>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<a class="navbar-brand" href="home.php">2GSolutions</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary ourTitle">Introduction to Programming - C Basics</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<a href="login.php" style='text-decoration: none;'>Already a member? Log in</a>
		<br style="clear:both;"/><br />
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form method="POST" action="save_member.php">	
				<div class="alert alert-info">Registration</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Firstname</label>
					<input type="text" name="firstname" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Lastname</label>
					<input type="text" name="lastname" class="form-control" required="required"/>
				</div>
				<?php
					if(ISSET($_SESSION['error'])){
				?>
				<div class="alert alert-warning"><?php echo $_SESSION['error']?></div>
				<?php
					session_unset();
					}
				?>
				
				<?php
					if(ISSET($_SESSION['error2'])){
				?>
				<div class="alert alert-warning"><?php echo $_SESSION['error2']?></div>
				<?php
					session_unset();
					}
				?>
				<button class="logout form-control" name="register"><span class="glyphicon glyphicon-save"></span> Register</button>
			</form>	
		</div>
	</div>
</body>
</html>