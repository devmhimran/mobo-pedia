<?php 

include './db/db.php';
include './db/function.php';

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './enqueue_style.php' ?>
    <title>Phone Suggestion</title>
</head>
<body>
    


<?php include './nav.php' ?>

    <section class="second-section hero is-black py-5">
        <div class="hero-body has-text-centered	">
          <div class="container">
            <p class="title">
                Phone Suggestion
              </p>
          </div>
        </div>
    </section>

<section class="third-section container">
  <div class="card p-6">
    <form action="suggesions.php" method="POST">
      

    <div class="columns my-2"> 

      <div class="column">
          <div class="select is-primary">
            <select name="brand">
              <option>Select Brands</option>
              <?php

                $all_brand = "SELECT * FROM brand";
                $brand_data = $conn -> query($all_brand);
                while($fetch_brand_data = $brand_data -> fetch_assoc()):
              ?>
               <option value="<?php echo $fetch_brand_data['id'] ?>"><?php echo $fetch_brand_data['brand_name'] ?></option>
              <?php endwhile; ?>
            </select>
          </div>
      </div>

      <div class="column">
          <div class="select is-primary">
            <select name="processor">
              <option  value="<?php old('processor'); ?>">Select Processor</option>
              <option value="snapdragon">Snapdragon</option>
              <option value="mediatek">MediaTek</option>
              <option value="exynos">Exynos</option>
              <option value="kirin">Kirin</option>
            </select>
          </div>
      </div>

      <!-- <div class="column">
          <div class="select is-primary">
            <select name="ram">
              <option>Select Ram</option>
              <option value="2">2 GB</option>
              <option value="3">3 GB</option>
              <option value="4">4 GB</option>
              <option value="6">6 GB</option>
              <option value="8">8 GB</option>
              <option value="16">16 GB</option>
            </select>
          </div>
      </div>

      <div class="column">
          <div class="select is-primary">
            <select name="rom">
              <option>Select Rom</option>
              <option value="16">16 GB</option>
              <option value="32">32 GB</option>
              <option value="64">64 GB</option>
              <option value="128">128 GB</option>
              <option value="512">512 GB</option>
            </select>
          </div>
      </div>

      <div class="column">
          <div class="select is-primary">
            <select name="primary_cam">
              <option>Primary Camera</option>
              <option value="5">5 MP</option>
              <option value="8">8 MP</option>
              <option value="10">10 MP</option>
              <option value="12">12 MP</option>
              <option value="13">13 MP</option>
              <option value="14">14 MP</option>
              <option value="15">15 MP</option>
              <option value="16">16 MP</option>
              <option value="20">20 MP</option>
              <option value="32">32 MP</option>
              <option value="64">64 MP</option>
              <option>120 MP</option>
            </select>
          </div>
      </div>

      <div class="column">
          <div class="select is-primary">
            <select name="secondary_cam">
              <option>Secondary Camera</option>
              <option value="2">2 MP</option>
              <option value="4">4 MP</option>
              <option value="5">5 MP</option>
              <option value="8">8 MP</option>
              <option value="10">10 MP</option>
              <option value="12">12 MP</option>
              <option value="14">14 MP</option>
              <option value="16">16 MP</option>
              <option value="20">20 MP</option>
            </select>
          </div>
      </div>

      <div class="column">
          <div class="select is-primary">
            <select name="battery">
              <option>Battery Capecity</option>
              <option value="2400">2400mAh</option>
              <option value="3200">3200mAh</option>
              <option value="3300">3300mAh</option>
              <option value="3800">3800mAh</option>
              <option value="4000">4000mAh</option>
              <option value="4200">4200mAh</option>
              <option value="4500">4500mAh</option>
              <option value="4800">4800mAh</option>
              <option value="5000">5000mAh</option>
              <option value="6000">6000mAh</option>
            </select>
          </div>
      </div> -->

     <div class="column is-1  pricing-divider">
        <p>BDT</p>
      </div>
      <div class="column is-2">
        <input class="input is-primary"  type="number" name="price_range_1">
      </div>
      <div class="column is-1 pricing-divider">
        <p>To</p>
      </div>
      <div class="column is-2">
        <input class="input is-primary"  type="number" name="price_range_2">
      </div>
      <div class="column is-2">
        <input  class="button is-primary"  type="submit" value="submit" name="suggesions_submit">
      </div>





    </div>
    <!-- <div class="columns my-2 ">
      <div class="column is-1  pricing-divider">
        <p>BDT</p>
      </div>
      <div class="column is-2">
        <input class="input is-primary"  type="number" name="price_range_1">
      </div>
      <div class="column is-1 pricing-divider">
        <p>To</p>
      </div>
      <div class="column is-2">
        <input class="input is-primary"  type="number" name="price_range_2">
      </div>
      <div class="column is-2">
        <input  class="button is-primary"  type="submit" value="submit" name="suggesions_submit">
      </div>
 
    </div> -->
  </form>
  </div>
  <hr>
</section>

<section class="fourth container">





    <div class="column is-12">
      <div class="block">
        <div class="columns">
        <?php


            if (isset($_POST['suggesions_submit'])) {
              $brand = $_POST['brand'];
              $processor = $_POST['processor'];
              // $ram = $_POST['ram'];
              // $rom = $_POST['rom'];
              // $primary_cam = $_POST['primary_cam'];
              // $secondary_cam = $_POST['secondary_cam'];
              // $battery = $_POST['battery'];
              $price_input_1 = $_POST['price_range_1'];
              $price_input_2 = $_POST['price_range_2'];

              $brand_phone = "SELECT * FROM phone WHERE phone_brand='$brand' AND phone_price BETWEEN $price_input_1 AND $price_input_2";
              $phone_data = $conn -> query($brand_phone);
              while($fetch_phone_data = $phone_data -> fetch_assoc()){
                ?>

                  <!-- -- Card Start -- -->
          <div class="column is-3">
            <div class="card  p-4">
              <div class="card-image">
                <img src="../assets/phone_img/<?php echo $fetch_phone_data['phone_img'] ?>" alt="">
              </div>
              <div class="media-content">
                <p class="title is-5 mt-2"><?php echo $fetch_phone_data['phone_name'] ?></p>
                <p class="subtitle is-6 mb-2">
                <?php 

                $brand_id =  $fetch_phone_data['phone_brand'];
                $brand = "SELECT brand_name FROM brand WHERE id='$brand_id'";
                $brand_data = $conn -> query($brand);
                $fetch_brand_data = $brand_data -> fetch_assoc();
                echo $fetch_brand_data['brand_name'];
                ?>
                </p>
                <p class="">BDT <?php echo $fetch_phone_data['phone_price'] ?></p>
              </div>
              <a href="./single-phone.php?id=<?php echo $fetch_phone_data['phone_id'] ?>" class="button is-small is-primary mt-3 ">View</a>
            </div>
          </div>
          <!-- -- Card End -- -->

                <?php
              }
          
            }
        ?>
          
  
          

         

          

         

         


         




        </div>
      </div>
    </div>




</section>






  <section class="site-footer has-background-black py-5">
    <div class="container">
      <p class="has-text-white-bis		">©2021. All rights reserved</p>
    </div>
  </section>




  <?php include './enqueue_script.php'; ?>

</body>
</html>