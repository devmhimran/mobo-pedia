<?php

include './db/db.php';

              $all_brand = "SELECT * FROM brand";
              $brand_data = $conn -> query($all_brand);
              while($fetch_brand_data = $brand_data -> fetch_assoc()):
            
            ?> <li><a href='./single-brand.php?id=<?php echo $fetch_brand_data['id'] ?>'><?php echo $fetch_brand_data['brand_name'] ?></a></li> 
            <?php endwhile; ?>
            <?php
?>