<?php
	session_start();
	require_once 'conn.php';
	
	if(ISSET($_POST['register'])){
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$sql = "SELECT COUNT(*)  as count2 FROM `member` WHERE `username` = :username";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':username', $username);
		$stmt->execute();
		$row = $stmt->fetch();
		
		$count2 = $row['count2'];
		
		if($count2 == 0){
			if($password > 3){
					
			$query = "INSERT INTO `member` (username, password, firstname, lastname) VALUES(:username, :password, :firstname, :lastname)";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $password);
		$stmt->bindParam(':firstname', $firstname);
		$stmt->bindParam(':lastname', $lastname);
		
		
		
		
		
		if($stmt->execute()){
			$_SESSION['success'] = "Successfully created an account";
			
			header('location: login.php');
		}
			}else{
				$_SESSION['error'] = "Password must have at least 3 characters";
			header('location:index.php');
			}				
		}else{
			$_SESSION['error'] = "Username already taken";
			header('location:index.php');
		}
		
		
		

	}
?>