<?php

include './db/db.php';

              $all_brand = "SELECT * FROM brand";
              $brand_data = $conn -> query($all_brand);
              while($fetch_brand_data = $brand_data -> fetch_assoc()):
            
            ?> <li><a><?php echo $fetch_brand_data['brand_name'] ?></a></li> 
            <?php endwhile; ?>
            <?php
?>