<?php

   // Message Fucntion Start
// -------------------------------
function set_msg($msg){
    setcookie('msg',$msg,time()+7);
   }


function get_msg(){
    if (isset($_COOKIE['msg'])) {
      echo "<p class='alert alert-success px-5 p-3'>" .$_COOKIE['msg']."</p>";
    }
  }
   // Message Fucntion End
// -------------------------------



   // Unique Check Function Start
// -------------------------------
  function unique_check($connection,$coloumn, $table_name, $coloumn_data){

    $username_check_sql = "SELECT $coloumn FROM  $table_name WHERE $coloumn = '$coloumn_data'";
    $data_row = $connection -> query($username_check_sql);
    $row  = $data_row -> num_rows;
      if ( $row > 0) {
        return false;
        
      }else{
        return true;
        
      }
   } 
   // Unique Check Function End
// -------------------------------


   // Photo upload function
// -------------------------------
function photo_upload($files, $location , $format=['jpg','png','jpeg']){

	$photo = $files['name'];
	$tmp_name = $files['tmp_name'];

	$file_extension = explode('.', $photo);
	$extension = strtolower(end($file_extension));
  $unique = md5(rand().time()).'.'.$extension;
	
  	if(in_array($extension, $format)){
  		move_uploaded_file($tmp_name, $location. $unique);

  		$status = 'yes';
  	}else{
  		$status = 'no';
  	}

  	return [

  		'file_name' => $unique,
  		'status'    => $status

  	];
}
// end of photo upload function
// -------------------------------