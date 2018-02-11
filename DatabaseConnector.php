<?php
	function connect(){
		$dsn = 'mysql:dbname=Web; host=localhost; charset=utf8';
		$usr = 'web';
		$password = 'web';
		
		try{
			$db = new PDO($dsn, $usr, $password);
		} catch(PDOException $error){
			exit("Error{$e->getMessage()}");
		}
		return $db;
	}