<?php


session_start();
      if(!isset($_SESSION['id']) AND !isset($_SESSION['user_name']) AND !isset($_SESSION['user_username'])){
            header("location:login.php");
          }
    
      if(isset($_GET['logout']) AND $_GET['logout'] == 'user-logout'){
        session_destroy();
        setcookie('user_re_log','',time() - (60*60*24*365));
        header("location:login.php");
      } 