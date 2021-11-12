<?php

include './db/db.php';
include './db/function.php';

    $id = $_GET['id'];
    $phone = "SELECT * FROM phone WHERE phone_id='$id'";
    $phone_data = $conn -> query($phone);
    $fetch_phone_data = $phone_data -> fetch_assoc();


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
                        <img src="../assets/phone_img/<?php echo $fetch_phone_data['phone_img'] ?>"  width='555' height='320' alt="">
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




  <section class="site-footer has-background-black py-5">
    <div class="container">
      <p class="has-text-white-bis">©2021. All rights reserved</p>
    </div>
  </section>

    <?php include './enqueue_script.php'; ?>

</body>
</html>