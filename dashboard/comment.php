<?php

    include 'db/db.php';
    include 'db/function.php';
    include 'route/routes.php';
    include 'db/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/dashboard/dashboard.css" />
    <title>All Phones</title>
</head>

<body>
     <!-- Sidebar Start-->
     <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <?php include './nav.php' ?>
        <!-- Sidebar End-->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>John Doe
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="?logout=user-logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            
            <!-- Main Content Start -->
            <div class="comment-table m-3">
                <h2>All Phones</h2>
                <table class="table mt-3">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">Comment Id</th>
                        <th scope="col" colspan="1">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Email</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Phone Name</th>
                        <th scope="col">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 1;
                    $all_comment= "SELECT * FROM comment ORDER BY comment_id DESC";
                    $comment_data = $conn -> query($all_comment);
                    while($fetch_comment_data = $comment_data -> fetch_assoc()):
                    ?>
                      <tr>
                        <th scope="row"><?php echo $i; $i++; ?></th>
                        <td colspan="1"><?php echo $fetch_comment_data['name'] ?></td>
                        <td>
                            <a href="../single-phone.php?id=<?php echo $fetch_comment_data['phone_id'] ?>" class="btn btn-outline-primary btn-sm">View</a>
                            <a id="date_delete" href="all-phones-delete.php?id=" class="btn btn-outline-danger btn-sm">Delete</a>
                        </td>
                        
                        <td><?php echo $fetch_comment_data['email'] ?></td>
                        <td><?php echo   substr($fetch_comment_data['comment_text'],0,60)."[...]";?></td>
                        <td class="comment-text"><?php 

                            $phone_id =  $fetch_comment_data['phone_id'];
                            $phone = "SELECT phone_name FROM phone WHERE phone_id='$phone_id'";
                            $phone_data = $conn -> query($phone);
                            $fetch_phone_data = $phone_data -> fetch_assoc();
                            echo $fetch_phone_data['phone_name'];

                            ?></td>
                        <td><?php echo $fetch_comment_data['created_at'] ?></td>
                      </tr>
                      <?php endwhile; ?>

                    </tbody>
                  </table>
            </div>
            <!-- Main Content End -->
    </div>
</div>
            <?php include './footer.php'; ?>
    <script>	
        $('a#date_delete').click(function(){
            let val = confirm('Are You Want To Delete ?');

            if( val == true){
                return true;
            }else{
                return false;
            }	
        });
	</script>
</body>

</html>