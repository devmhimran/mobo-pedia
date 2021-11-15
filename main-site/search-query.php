<?php
  require_once './db/search-config.php';

  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $sql = 'SELECT * FROM phone WHERE phone_name LIKE :phone';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['phone' => '%' . $inpText . '%']);
    $result = $stmt->fetchAll();

    if ($result) {
      foreach ($result as $row) {
        echo '<div class="card">
                <a href="#">
                  <div class="search-list p-4">
                                     
                    <img src="../assets/phone_img/'.$row['phone_img'].'" alt="">
                    <p class="ml-3">'.$row['phone_name'].'</p>
                                      
                  </div>
                </a>
              </div>';
      }
    } else {
      echo '<p class="list-group-item border-1">No Record</p>';
    }
  }
?>