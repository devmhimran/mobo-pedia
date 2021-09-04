<?php


function set_msg($msg){
    setcookie('msg',$msg,time()+7);
   }


function get_msg(){
    if (isset($_COOKIE['msg'])) {
      echo "<p class='alert alert-success px-5 p-3'>" .$_COOKIE['msg']."</p>";
    }
  }


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