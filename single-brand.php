<?php

  include './db/db.php';  

    $id = $_GET['id'];
    $brand = "SELECT * FROM brand WHERE id='$id'";
    $brand_data = $conn -> query($brand);
    $fetch_brand_data = $brand_data -> fetch_assoc();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './enqueue_style.php' ?>
    <title><?php echo $fetch_brand_data['brand_name'] ?></title>
</head>
<body>
    


<?php include './nav.php' ?>

    <section class="second-section hero is-black py-5">
        <div class="hero-body has-text-centered	">
          <div class="container">
            <h1 class="title">
                <?php echo $fetch_brand_data['brand_name'] ?>
            </h1>
          </div>
        </div>
    </section>

<section class="third-section container">
  <div class="columns">
    <!-- <div class="column is-2">
      <div class="card p-4">
        <aside class="menu">
          <p class="menu-label">
            All Brands
          </p>      
          <ul class="menu-list">
            <li><a>Nokia</a></li>
            <li><a>Samsung</a></li>
            <li><a>Xiaomi</a></li>
          </ul>
        </aside>
      </div>
    </div> -->
    
    <div class="column is-12">
      <div class="block">
        <div class="columns">
        <?php

            $brand_phone = "SELECT * FROM phone WHERE phone_brand='$id'";
            $phone_data = $conn -> query($brand_phone);
            while($fetch_phone_data = $phone_data -> fetch_assoc()):
          
        
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

                // $brand_id =  $fetch_phone_data['phone_brand'];
                // $brand = "SELECT brand_name FROM brand WHERE id='$brand_id'";
                // $brand_data = $conn -> query($brand);
                // $fetch_brand_data = $brand_data -> fetch_assoc();
                // echo $fetch_brand_data['brand_name'];
                 echo $fetch_brand_data['brand_name'];
                ?>
                </p>
                <p class="">BDT <?php echo $fetch_phone_data['phone_price'] ?></p>
              </div>
              <a href="./single-phone.php?id=<?php echo $fetch_phone_data['phone_id'] ?>" class="button is-small is-primary mt-3 ">View</a>
            </div>
          </div>
          <!-- -- Card End -- -->
          <?php endwhile; ?>
          

         

          

         

         


         




        </div>
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