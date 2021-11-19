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
                Blog Category
              </p>
          </div>
        </div>
    </section>

<section class="third-section container">
  <div class="columns py-5">
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
          <a href='single-category.php?id=<?php echo $fetch_post_category_data['category_id'] ?>'>
            <div style='height:180px;  display:flex; align-items:center;' class="card  has-text-centered p-4">
              <div style='' class="media-content ">
                <p class="title post-category-name is-5 mt-2"><?php echo $fetch_post_category_data['category_name'] ?></p>
              </div>
            </div>
          </div>
          </a>
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