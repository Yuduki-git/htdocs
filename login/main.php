<?php
	session_start();
	require_once(DatabaseConnector.php);
	$db = connect();
	$select = $db->prepare('SELECT Userid, Password FROM ID_Pass WHERE ')