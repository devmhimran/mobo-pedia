<?php

include './db/db.php';
include './db/function.php';
 
$id = $_GET['id'];
$category = "SELECT * FROM post_category WHERE category_id='$id'";
$category_data = $conn -> query($category);
$fetch_category_data = $category_data -> fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './enqueue_style.php' ?>
    <title><?php echo $fetch_category_data['category_name'] ?></title>
</head>
<body>
    


<?php include './nav.php' ?>

    <section class="second-section hero is-black py-5">
        <div class="hero-body has-text-centered	">
          <div class="container">
            <p class="title single-category-hero-title">
              <?php echo $fetch_category_data['category_name'] ?>
              </p>
          </div>
        </div>
    </section>

<section class="third-section container post-grid" >
  <div class="columns">
    <!-- <div class="column is-1"></div> -->
    <div class="column is-12">
      <div class="block">
        <div class="columns">

          
          <?php 
            $category_id = $fetch_category_data['category_id'];
            $all_post = "SELECT * FROM post WHERE category = '$category_id' ORDER BY post_id DESC";
            $post_data = $conn -> query($all_post);
            while($fetch_post_data = $post_data -> fetch_assoc()):

                ?> 
                <div class="column is-4 ">
                <div class="card">
                    
                
                    <div class="card-image">
                        <figure class="image is-4by3">
                        <img class="card-post-img" src="./dashboard/assets/post/<?php echo $fetch_post_data['featured_photo'] ?>" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">                 
                            <p class="card-post-title"><?php echo $fetch_post_data['post_title'] ?></p>
                        <div class="main-content">
                        <p class="post-content">
                        <?php 
                            echo   substr($fetch_post_data['post_content'],0,230)."[...]";
                        ?>
                        </p>
                        
                        <br>
                        <p class="subtitle post-category">Category: 
                                <?php
                               $post_category_id = $fetch_post_data['category'];
                                $post_category = "SELECT category_name FROM post_category WHERE category_id='$post_category_id'";
                                $post_category_data = $conn -> query($post_category);
                                $fetch_category_data = $post_category_data -> fetch_assoc();
                                echo $fetch_category_data['category_name'];              
                                
                                ?>
                            </p>
                        <time datetime="2016-1-1">
                            <p  class="post-time" ><?php 

                            date_default_timezone_set('Asia/Dhaka'); 
                            $post_time = $fetch_post_data['created_at'];
                            echo time_ago($post_time);   
                            ?></p>
                        </time>
                        </div>
                        
                        <a href="singe-post.php?id=<?php echo $fetch_post_data['post_id'] ?>" class="button is-small is-primary " >Read More
                        </a>
                    </div>
                    <?php

                        // $created_at = '2021-11-09 22:47:57';
                        $created_at =  $fetch_post_data['created_at'];
                        $time_ago = strtotime($created_at);  
                        $current_time = time();  
                        $time_difference = $current_time - $time_ago;  
                        $seconds = $time_difference;  
                        $minutes      = round($seconds / 60 );    
                        $hours           = round($seconds / 3600);   
                        $days          = round($seconds / 86400);      
                        $weeks          = round($seconds / 604800);   
                        $months          = round($seconds / 2629440); 
                        $years          = round($seconds / 31553280);
                        
                        if( $hours <= 24){
                            echo '<div class="badge">
                                    <span  class="tag is-primary">New</span>
                                </div>';
                        }else{
                            echo ' ';
                        }

                    
                    ?>
                    </div>
                    
                </div>
                    <?php endwhile; ?>
                    <?php
                
                ?>
                    
        </div>
      </div>
    </div>
    <!-- <div class="column is-1"></div> -->



        



        

        


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