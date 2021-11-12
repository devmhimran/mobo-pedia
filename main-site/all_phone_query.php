<?php 

include './db/db.php';

$all_phone = "SELECT * FROM phone ORDER BY phone_id DESC";
$phone_data = $conn -> query($all_phone);
while($fetch_phone_data = $phone_data -> fetch_assoc()):

    ?> 
    <div class="column is-3">
    <div class="card  p-4">
      <div class="card-image has-text-centered ">
        <img  class="card-phone-img" src="../assets/phone_img/<?php echo $fetch_phone_data['phone_img'] ?>" alt="">
      </div>
      <div class="media-content">
        <p class="title is-5 mt-2"><?php echo $fetch_phone_data['phone_name'] ?></p>
        <p class="subtitle is-6 mb-2"><?php 

            $brand_id =  $fetch_phone_data['phone_brand'];
            $brand = "SELECT brand_name FROM brand WHERE id='$brand_id'";
            $brand_data = $conn -> query($brand);
            $fetch_brand_data = $brand_data -> fetch_assoc();
            echo $fetch_brand_data['brand_name'];
        
        ?></p>
        <p class="">BDT <?php echo $fetch_phone_data['phone_price'] ?></p>
      </div>
      <a class="button is-small is-primary mt-3 " href="./single-phone.php?id=<?php echo $fetch_phone_data['phone_id'] ?>">View</a>
    </div>
  </div>
  <?php endwhile; ?>
  <?php


?>