<?php
	
	include('db/db.php');
	
	$id = $_GET['id'];

	 $sql ="DELETE FROM post_category WHERE category_id='$id'" ;
	 $conn -> query($sql);
	header('location: post-category.php');

