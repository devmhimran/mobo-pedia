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
    <title>Mobo Pedia</title>
</head>
<body>
    


    <?php include './nav.php' ?>

<section class="second-section">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="./assets/img/Banner-1.png" alt=""></div>
      <div class="swiper-slide"><img src="./assets/img/Banner-2.png" alt=""></div>
      <div class="swiper-slide"><img src="./assets/img/Banner-3.png" alt=""></div>
      <div class="swiper-slide"><img src="./assets/img/Banner-4.png" alt=""></div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>

<section class="third-section container">
  <div class="columns">
    <div class="column is-2">
      <div class="card p-4">
        <aside class="menu">
          <p class="menu-label">
            All Brands
          </p>      
          <ul class="menu-list">
            <?php include './brand_sidebar.php' ?>
          </ul>
        </aside>
      </div>
    </div>
    
    <div class="column is-10">
      <div class="block">
        <div class="columns">
        <?php 
          include './all_phone_query.php'
        ?>
          
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



<script>
  
  $(document).ready(function() {

$("#server").click(function() {
  $("#server-content").toggle();
});
});

</script>

  <?php include './enqueue_script.php'; ?>
</body>
</html>