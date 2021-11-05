<?php 
include 'db/db.php';
include 'db/function.php';

include 'route/routes.php';







if(isset($_POST['login'])){
    $user_username = $_POST['username'];
    $user_pass = $_POST['password'];

    if(empty($user_username)){
        $username_valid = "<p class='invailed-msg'>Username/Email Required</p>";
       }
       if(empty($user_pass)){
        $pass_valid = "<p class='invailed-msg'>Password Required</p>";
       }

       if(empty($user_username)||empty($user_pass)){
        $valid =  "<p style ='color:#CC3C39;'>All fields are required<button style='color:red;' class='close' data-dissmiss='alert'>&times;</button></p>";
    
       }else{
        $sql_username = "SELECT * FROM user WHERE user_username ='$user_username'|| user_email ='$user_username'";
        $data = $conn -> query($sql_username);
        $f_data = $data -> fetch_assoc();
        if( $data -> num_rows == 1){
            if( $user_pass == $f_data['user_pass'] ){

            session_start();
            $_SESSION['id'] = $f_data['id'];
            $_SESSION['user_name'] = $f_data['user_name'];
            $_SESSION['user_username'] = $f_data['user_username'];
            $_SESSION['user_email'] = $f_data['user_email'];
            $_SESSION['user_img'] = $f_data['user_img'];
            header("location: index.php");
                }else{
                    $valid =  "<div class='alert alert-danger' role='alert'>Wrong Password<button class='close' data-dissmiss='alert'>&times;</button></div>";
                }
            }else{
                $valid =  "<div class='alert alert-danger' role='alert'>Wrong Username<button class='close' data-dissmiss='alert'>&times;</button></div>";
            }
       }


}

session_start();
	

	if(isset($_SESSION['id']) AND isset($_SESSION['user_name']) AND isset($_SESSION['user_username'])){
		header("location:index.php");
	  }
      if(isset($_COOKIE['user_re_log'])){
		$user_id = $_COOKIE['user_re_log'];
		$sql_username = "SELECT * FROM user WHERE id ='$user_id'";
		$session_data = $conn -> query($sql_username);
		$fetch_data = $session_data -> fetch_assoc();

		$_SESSION['id'] = $fetch_data['id'];
		$_SESSION['user_name'] = $fetch_data['user_name'];
		$_SESSION['user_email'] = $fetch_data['user_email'];
		$_SESSION['user_username'] = $fetch_data['user_username'];

		header("location:index.php");

	  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/dashboard/dashboard.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="login-form">
        <h2>Sign in</h2>
    <div class="card login-form-card">
        
        <form action="<?php $_SERVER['PHP_SELF']?>" method = "POST">
            <div class="card-body">
            <?php 
        
        if(isset($valid)){
            echo $valid;
        }
        
        ?>
                <div class="form-group mt-2">
                    <label for="exampleInputEmail">Email or Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="@example" name='username'>
                    <?php 
                        if(isset($username_valid)){
                            echo $username_valid;
                        }
                    ?>
                </div>
                <div class="form-group mt-2">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword" aria-describedby="emailHelp" placeholder="Password" name='password'>
                    <?php 
                        if(isset($pass_valid)){
                            echo $pass_valid;
                        }
                    ?>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary mt-3" value="Sign in" name="login">
                </div>
            </div>
        </form>
    </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
