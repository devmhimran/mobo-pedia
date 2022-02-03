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
              <option >Select Processor</option>
              <option value="snapdragon">Snapdragon</option>
              <option value="mediatek">MediaTek</option>
              <option value="exynos">Exynos</option>
              <option value="kirin">Kirin</option>
            </select>
          </div>
      </div>

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
        <input  class="button is-primary"  type="submit" value="Check" name="suggesions_submit">
      </div>





    </div>
  </form>
  </div>
  <hr>

  <div class="phone-details">
    
<?php 

            if (isset($_POST['suggesions_submit'])) {
              $brand = $_POST['brand'];
              $processor = $_POST['processor'];
              $price_input_1 = $_POST['price_range_1'];
              $price_input_2 = $_POST['price_range_2'];


              ?>

              <p><strong>Phone Brand : </strong> <?php 
              $phone_brand = "SELECT * FROM brand WHERE id = '$brand'";
              $phone_brand_data = $conn -> query($phone_brand);
              $fetch_phone_brand_data = $phone_brand_data -> fetch_assoc();
              echo $fetch_phone_brand_data['brand_name'];
              ?>  >  
              <strong> Phone Soc : </strong> <?php echo $processor ?>  >  <strong> Phone Price Range : </strong> <?php echo $price_input_1 ?> To  <?php echo $price_input_2 ?></p>
              <?php            
            }
  
  ?>
  
  </div>
  
   
</section>

<section class="fourth container">





    <div class="column is-12 py-6">
      <div class="block">
        <div class="columns">
        <?php


            if (isset($_POST['suggesions_submit'])) {
              $brand = $_POST['brand'];
              $processor = $_POST['processor'];
              $price_input_1 = $_POST['price_range_1'];
              $price_input_2 = $_POST['price_range_2'];

              $brand_phone = "SELECT * FROM phone WHERE phone_brand='$brand' AND phone_processor LIKE '%$processor%' AND phone_price BETWEEN $price_input_1 AND $price_input_2";
              $phone_data = $conn -> query($brand_phone);
              if ( $phone_data -> num_rows == 1 ) {
                while($fetch_phone_data = $phone_data -> fetch_assoc()){
                ?>
                  <!-- -- Card Start -- -->
                  <div class="column is-3">
                    <div class="card  p-4">
                      <div class="card-image">
                        <img src="./dashboard/assets/phone_img/<?php echo $fetch_phone_data['phone_img'] ?>" alt="">
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
          
              }else{
                echo "<h1 class='is-size-1 py-5 has-text-centered'>Not Found</h1>";
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