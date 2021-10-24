<?php
	
	include('db/db.php');
	
	$id = $_GET['id'];

	 $sql ="DELETE FROM phone WHERE phone_id='$id'" ;
	 $conn -> query($sql);
	header('location: all-phones.php');

