<?php

    include 'db/db.php';
    include 'db/function.php';
    if(isset($_POST['submit'])){

        $category = $_POST['category_name'];
        $unique_brand_check = unique_check($conn, 'category_name', 'post_category',$category);

        if(empty($category)){
            $valid = "<p style='color:red;'>Field Is Empty</p>";       
        }elseif($unique_brand_check == false){
            $valid = "<p style='color:red;'>Already Exists</p>";
        }
        else{
            $sql = " INSERT INTO post_category (category_name) values ('$category')";
            $conn -> query($sql);
            set_msg('Successfully Publish');
            header("location:post-category.php");
        }
        
    }

    
    include './header.php';

?>
<body>
     <!-- Sidebar Start-->
     <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 main-logo fs-4 fw-bold text-uppercase border-bottom">
                <i class="fas fa-mobile me-2"></i>Mobo Pedia</div>

            <div class="list-group list-group-flush my-3">
                <a href="./index.php" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </a>
                <a href="./analytics.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-chart-line me-2"></i>Analytics
                </a>
                <div class="dropdown">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="far fa-list-alt me-2"></i>Post
                </a>
                    <ul class="dropdown-menu post-dropdown" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="./add-post.php">Add Post</a></li>
                      <li><a class="dropdown-item" href="./all-post.php">All Post</a></li>
                      <li><a class="dropdown-item" href="./post-category.php">Category</a></li>
                    </ul>
                  </div>
                  <div class="dropdown">
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="far fa-list-alt me-2"></i>Phone
                    </a>
                        <ul class="dropdown-menu post-dropdown" aria-labelledby="dropdownMenuButton2">
                          <li><a class="dropdown-item" href="./add-phone.php">Add Phone</a></li>
                          <li><a class="dropdown-item" href="./all-phones.php">All Phones</a></li>
                        </ul>
                      </div>
                    <a href="./brand.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fas fa-tags me-2"></i>Brand
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fas fa-cog me-2"></i>Settings
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                        <i class="fas fa-power-off me-2"></i>Logout
                    </a>
            </div>
        </div>
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
            <?php get_msg(); ?>
            <div class="brand m-3">
                <div class="row m-3"> 
                    <div class="col-5 ">
                        <form action="<?php $_SERVER['PHP_SELF']?>" method = "POST" enctype='multipart/form-data'>
                            <h2 class="mb-3">Add Category</h2>
                            <input type="text" class="form-control mb-3 w-75" id="exampleFormControlInput1" placeholder="Type Category Name" name="category_name">
                            <small>
                            <?php if(isset($valid)){
                                echo $valid;
                            } ?>
                            </small>
                            <input type="submit" class="btn btn-primary" value="Publish" name="submit">
                        </form>
                    </div>
                    <div class="col-6">
                        <table class="table">
                            <thead class="table-dark">

                            
                              <tr>
                                <th scope="col">Category Id</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">status</th>
                                <th scope="col">Date</th>
                              </tr>
                            </thead>
                            <tbody>
                            
                            <?php
                                $all_category_name = "SELECT * FROM post_category";
                                $category_data = $conn -> query($all_category_name);
                                while($fetch_category_data = $category_data -> fetch_assoc()):
                            ?>

                              <tr>
                                <th scope="row"><?php echo $fetch_category_data['category_id']?></th>
                                <td><?php echo $fetch_category_data['category_name'] ?></td>
                                <td>
                                    <a href="#" class="btn btn-outline-primary btn-sm">View</a>
                                    <a href="post-category-update.php?id=<?php echo $fetch_category_data['category_id']?>" class="btn btn-outline-warning btn-sm">Update</a>
                                    <a id="delete_data" href="post-category-delete.php?id=<?php echo $fetch_category_data['category_id']?>" class="btn btn-outline-danger btn-sm">Delete</a>                     
                                </td>
                                <td><?php echo $fetch_category_data['created_at'] ?></td>
                              </tr>
                              <tr>
                                <?php endwhile; ?>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
            <!-- Main Content End -->
    
            <?php include './footer.php'; ?>
            <script>	
        $('a#delete_data').click(function(){
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