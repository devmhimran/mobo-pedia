<?php
	
	include('db/db.php');
	
	$id = $_GET['id'];

	 $sql ="DELETE FROM post WHERE post_id='$id'" ;
	 $conn -> query($sql);
	header('location: all-post.php');

