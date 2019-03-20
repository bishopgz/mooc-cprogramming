<?php
	session_start();
	require_once 'conn.php';
	
	if(ISSET($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = "SELECT COUNT(*) as count, firstname FROM `member` WHERE `username` = :username AND `password` = :password";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $password);
		$stmt->execute();
		$row = $stmt->fetch();
		
		$count = $row['count'];
		
		
		if($count > 0){
			$_SESSION['user'] = $username;
			$_SESSION['score'] = $row['grades'];
			$_SESSION["firstname"] = $row['firstname'];
			header('location:home.php');
		}else{
			$_SESSION['error'] = "Invalid username or password";
			header('location:login.php');
		}
	}
?>