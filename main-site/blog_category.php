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
    <title>Blog Category</title>
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

          $all_post_category = "SELECT * FROM post_category";
          $post_category_data = $conn -> query($all_post_category);
          while($fetch_post_category_data = $post_category_data -> fetch_assoc()):

        ?>

          <!-- -- Card Start -- -->
          <div class="column is-3">
            <div style='height:180px;  display:flex; align-items:center;' class="card  has-text-centered p-4">
              <div style='' class="media-content ">
                <a href='./single-brand.php?id=<?php echo $fetch_brand_data['id'] ?>'><p class="title is-5 mt-2"><?php echo $fetch_post_category_data['category_name'] ?></p></a>
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





    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./assets/js/bulma.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/swiper.js"></script>

</body>
</html>