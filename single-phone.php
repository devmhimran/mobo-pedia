<?php

include './db/db.php';
include './db/function.php';

    $id = $_GET['id'];
    $phone = "SELECT * FROM phone WHERE phone_id='$id'";
    $phone_data = $conn -> query($phone);
    $fetch_phone_data = $phone_data -> fetch_assoc();

    $phone_id = $fetch_phone_data['phone_id'];
    if(isset($_POST['comment_submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $comment_text = $_POST['comment_text'];

      if( empty($name) || empty($email) || empty($comment_text)){
        $valid_msg = '<p class="has-text-danger" id="my-form-status">All Field Require</p>' ;
      }else{
        $sql =  "INSERT INTO comment (name, email, comment_text, phone_id) values ('$name', '$email', '$comment_text', '$phone_id')";
        $conn -> query($sql);
        set_msg('Successfully Published');
        header("Location:single-phone.php?id= $phone_id");

      }

    }













?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './enqueue_style.php' ?>
    <title><?php echo $fetch_phone_data['phone_name'] ?></title>

</head>
<body>
    


<?php include './nav.php' ?>

  <section class="second-section hero is-primary py-5">
        <div class="hero-body has-text-centered ">
          <div class="container">
            <p class="title">
                <?php echo $fetch_phone_data['phone_name'] ?>
            </p>
          </div>
        </div>
    </section>
<section class="third-section container">
    <div class="phone-details">
        <div class="columns ">
            <div class="column is-4">
                <div class="card">
                    <div class='zoom' id='ex1' >
                        <img src="./dashboard/assets/phone_img/<?php echo $fetch_phone_data['phone_img'] ?>"  width='555' height='320' alt="">
                    </div>
                    <div class="columns phone-price-info">
                        <div class="column is-2"><img class="single-phone-price-icon" src="./assets/img/mobopedia-money.png" alt=""></div>
                    <div class="column is-4">
                                   
                                   <div class="phone-price">
                                       <strong>Price</strong>
                                       <p>BDT <?php echo $fetch_phone_data['phone_price'] ?></p>
                                   </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="column is-8">
                <div class="card p-6">
                    



                    <div class="phone-info p-1">
                       
                        <div class="columns">
                            <div class="column">
                                   <img class="single-phone-icon" src="./assets/img/mobopedia-screen.png" alt="">
                                   <div class="phone-info">
                                       <strong>Display</strong>
                                       <p class="mt-2"><?php echo $fetch_phone_data['phone_screen'] ?></p>
                                   </div>
                            </div>
                            <div class="column">
                                   <img class="single-phone-icon" src="./assets/img/mobopedia-resulation.png" alt="">
                                   <div class="phone-info">
                                       <strong>Resoulation</strong>
                                       <p class="mt-2"><?php echo $fetch_phone_data['phone_res'] ?></p>
                                   </div>
                            </div>
                            <div class="column">
                                   <img class="single-phone-icon" src="./assets/img/mobopedia-cpu.png" alt="">
                                   <div class="phone-info">
                                       <strong>Processor</strong>
                                       <p class="mt-2"><?php echo $fetch_phone_data['phone_processor'] ?></p>
                                   </div>
                            </div>

                        </div>
                        <div class="columns">
                            <div class="column">
                                   <img class="single-phone-icon" src="./assets/img/mobopedia-primary-camera.png" alt="">
                                   <div class="phone-info">
                                       <strong>Primary Camera</strong>
                                       <p class="mt-2"><?php echo $fetch_phone_data['phone_cam_primary'] ?></p>
                                   </div>
                            </div>
                            <div class="column">

                                   <img class="single-phone-icon" src="./assets/img/mobopedia-secondary-camera.png" alt="">
                                   <div class="phone-info">
                                       <strong>Secondary Camera</strong>
                                       <p class="mt-2"><?php echo $fetch_phone_data['phone_cam_secondary'] ?></p>
                                   </div>
                            </div>
                            <div class="column">
                                   <img class="single-phone-icon" src="./assets/img/mobopedia-ram.png" alt="">
                                   <div class="phone-info">
                                       <strong>RAM</strong>
                                       <p class="mt-2"><?php echo $fetch_phone_data['phone_ram'] ?></p>
                                   </div>
                            </div>

                        </div>
                        <div class="columns">
                            <div class="column">
                                   <img class="single-phone-icon" src="./assets/img/mobopedia-memory.png" alt="">
                                   <div class="phone-info">
                                       <strong>Storage</strong>
                                       <p class="mt-2"><?php echo $fetch_phone_data['phone_rom'] ?></p>
                                   </div>
                            </div>
                            <div class="column">
                                   <img class="single-phone-icon" src="./assets/img/mobopedia-battery.png" alt="">
                                   <div class="phone-info">
                                       <strong>Battery Capacity</strong>
                                       <p class="mt-2"><?php echo $fetch_phone_data['phone_battery'] ?></p>
                                   </div>
                            </div>
                            <div class="column">
                                   <img class="single-phone-icon" src="./assets/img/mobopedia-os.png" alt="">
                                   <div class="phone-info">
                                       <strong>OS</strong>
                                       <p class="mt-2"><?php echo $fetch_phone_data['phone_os'] ?></p>
                                   </div>
                            </div>

                        </div>
                    </div>

                    </div>




                            







                </div>
            </div>
        </div>
    </div>
</section>
<section class="fourth-section m-6">
<div class="container">

    <div class="card p-5 ">
    <h2 class="comment-heading p-5">Comments</h2>
        <!-- user comment start -->
        <?php

            $all_comment = "SELECT * FROM comment WHERE phone_id = '$phone_id' ORDER BY comment_id DESC";
            $comment_data = $conn -> query($all_comment);
            while($fetch_comment_data = $comment_data -> fetch_assoc()):

        
        ?>
        <div class="all-comment mt-2 ml-6">
            <div class="main-comment my-1">
                <div class="user-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="comment-details">
                    <h2><?php echo $fetch_comment_data['name'] ?></h2>
                    <small class="comment-time">
                        <?php 
                            date_default_timezone_set('Asia/Dhaka'); 
                            $post_time = $fetch_comment_data['created_at'];
                            echo time_ago($post_time);   
                        ?>
                    </small>
                    <p><?php echo $fetch_comment_data['comment_text'] ?></p>
                </div>
            </div>
        </div>
        <!-- user comment end -->
        <?php endwhile; ?>
        <div class="comment-box  m-6">
            <form action="" method="POST">
            <div class="field">
            <div class="block">
                <div class="field my-4">                    
                    <input class="input is-primary" type="text" placeholder="Name"  name="name">                   
                </div>
                <div class="field my-4">
                    <div class="control  has-icons-left has-icons-right">
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope fa-xs"></i>
                        </span>
                        <input class="input is-primary" type="email" placeholder="Email" name="email">
                    </div>
                </div>
                
                <div class="field my-4">
                    <textarea class="textarea is-primary" placeholder="Enter Comment" name="comment_text"></textarea>
                </div>
                <div class="field my-2">
                    <input type="submit" class="button is-primary" value="Submit" name="comment_submit">
                </div>
            </div>
          </div>
          <?php 
            if(isset($valid_msg)){
                echo $valid_msg ;
            }
           get_msg();
           ?>
            </form>
        </div>
    </div>
    </div>
</section>



  <section class="site-footer has-background-black py-5">
    <div class="container">
      <p class="has-text-white-bis">©2021. All rights reserved</p>
    </div>
  </section>

    <?php include './enqueue_script.php'; ?>

</body>
</html>