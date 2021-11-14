<?php
    include 'db/db.php';
    include 'db/function.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include 'enqueue.php' ?>
    <title>All Post</title>
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
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>


            <!-- Main Content Start -->
            <div class="post-table m-3">
                <h2>All Posts</h2>
                <table class="table mt-3">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">Post Id</th>
                        <th scope="col" colspan="2">Post Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Category</th>
                        <th scope="col">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                              $all_post = "SELECT * FROM post";
                              $post_data = $conn -> query($all_post);
                              while($fetch_post_data = $post_data -> fetch_assoc()):
                    ?>
                      <tr>
                        <th scope="row"><?php echo $fetch_post_data['post_id'] ?></th>
                        <td colspan="2"><?php echo $fetch_post_data['post_title'] ?></td>
                        <td>
                            <a class="btn btn-outline-primary btn-sm">View</a>
                            <a class="btn btn-outline-warning btn-sm" href="all-post-update.php?id=<?php echo $fetch_post_data['post_id'] ?>">Update</a>
                            <a id="data_delete" href="all-post-delete.php?id=<?php echo $fetch_post_data['post_id'] ?>" class="btn btn-outline-danger btn-sm">Delete</a>
                        </td>
                        <td>
                            <?php 
                           $category_id =  $fetch_post_data['category'];
                           $category = "SELECT category_name FROM post_category WHERE category_id='$category_id'";
                           $category_data = $conn -> query($category);
                           $fetch_category_data = $category_data -> fetch_assoc();
                           echo $fetch_category_data['category_name'];
                        ?>
                        </td>
                        <td><?php echo $fetch_post_data['created_at'] ?></td>
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
        $('a#data_delete').click(function(){
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