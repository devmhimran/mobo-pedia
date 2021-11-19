<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './enqueue_style.php' ?>
    <title>All Phones</title>
</head>
<body>
    


<?php include './nav.php' ?>

    <section class="second-section hero is-black py-5">
        <div class="hero-body has-text-centered	">
          <div class="container">
            <p class="title">
                All Phones
              </p>
          </div>
        </div>
    </section>

<section class="third-section container" >
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
    <div class="column is-1"></div>
    <div style='display:flex;' class="column is-10">
      <div class="block">
        <div class="columns">

          
          <?php include './all_phone_query.php'; ?>

        </div>
      </div>
    </div>
    <div class="column is-1"></div>



        



        

        


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