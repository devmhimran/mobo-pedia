<?php 

include './db/db.php';


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './enqueue_style.php' ?>
    <title>Brand</title>
</head>
<body>
    


<?php include './nav.php' ?>

    <section class="second-section hero is-black py-5">
        <div class="hero-body has-text-centered	">
          <div class="container">
            <p class="title">
                Brands
              </p>
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

          $all_brand = "SELECT * FROM brand";
          $brand_data = $conn -> query($all_brand);
          while($fetch_brand_data = $brand_data -> fetch_assoc()):

        ?>

          <!-- -- Card Start -- -->
          <div class="column is-3">
            <div class="card has-text-centered p-4">
              <div class="card-image">
                <a href='./single-brand.php?id=<?php echo $fetch_brand_data['id'] ?>'><img src="../assets/brand_img/<?php echo $fetch_brand_data['brand_img'] ?>" alt=""></a>
              </div>
              <div class="media-content">
                <a href='./single-brand.php?id=<?php echo $fetch_brand_data['id'] ?>'><p class="title is-5 mt-2"><?php echo $fetch_brand_data['brand_name'] ?></p></a>
              </div>
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