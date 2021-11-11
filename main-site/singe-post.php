<?php

include './db/db.php';
include './db/function.php';


    $id = $_GET['id'];
    $post = "SELECT * FROM post WHERE post_id='$id'";
    $post_data = $conn -> query($post);
    $fetch_post_data = $post_data -> fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './enqueue_style.php' ?>
    <title><?php echo $fetch_post_data['post_title'] ?></title>
</head>
<body>
    


<?php include './nav.php' ?>

    <section class="second-section hero is-black py-5">
        <div class="hero-body has-text-centered	">
          <div class="container">
            <p class="single-post-hero-title">
                <?php echo $fetch_post_data['post_title'] ?>
              </p>
          </div>
        </div>
    </section>

<section class="third-section container post-grid" >
    <div class="columns">
      <div class="column is-1"></div>
      <div class="column is-10">
      <div class="card">
        <div class="card-image">
            <img class="post-img" src="../assets/post/<?php echo $fetch_post_data['featured_photo'] ?>" alt="">
        </div>
        <div class="card-content">
          <h1 class="post-title">
            <?php echo $fetch_post_data['post_title'] ?>
          </h1>
          <div class="post-content">
            <?php echo $fetch_post_data['post_content'] ?>
          </div>
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