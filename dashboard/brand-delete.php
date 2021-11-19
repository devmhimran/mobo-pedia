<?php
	
	include('db/db.php');
	include 'db/session.php';
	$id = $_GET['id'];

	 $sql ="DELETE FROM brand WHERE id='$id'" ;
	 $conn -> query($sql);
	header('location: brand.php');

