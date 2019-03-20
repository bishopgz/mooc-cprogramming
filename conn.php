<?php
	$conn = new PDO('sqlite:db/db_member.sqlite3');
	
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$query = "CREATE TABLE IF NOT EXISTS member(id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 
			  username TEXT, password TEXT, firstname TEXT, lastname TEXT, grades FLOAT)";
	
	$conn->exec($query);
?>