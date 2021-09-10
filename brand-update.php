<?php

    include 'db/db.php';
    include 'db/function.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM brand WHERE id='$id'";
    $data = $conn -> query($sql);
    $fetch_data = $data -> fetch_assoc();
    $unique_brand_check = [''];
    if(isset($_POST['submit'])){

        $brand_name = $_POST['brand_name'];
        $unique_brand_check = unique_check($conn,'brand_name','brand',$brand_name);

        if(empty($brand_name)){
            $valid = "<p style='color:red;'>Field Is Empty</p>";
        }elseif($unique_brand_check == false){
            $valid = "<p style='color:red;'>Already Exists</p>";
        }else{
            $update_sql = "UPDATE brand SET brand_name = '$brand_name' WHERE id = '$id';";
            $conn -> query($update_sql);
            set_msg('Brand updated Successfully');
            header("location: brand.php");
        }



        $brand = $_POST['brand_name'];
        $sql = "SELECT * FROM brand WHERE id='$id'";
        $conn -> query($sql);
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
                            <h2 class="mb-3">Add Brand</h2>
                            <?php 

                            ?>
                            <input type="text" class="form-control mb-3 w-75" id="exampleFormControlInput1" placeholder="Type Brand Name" name="brand_name" value="<?php echo $fetch_data['brand_name'] ?>">
                            <small>
                                <?php if(isset($valid)){
                                    echo $valid;
                                } ?>
                            </small>
                            <input type="submit" class="btn btn-success" value="Update" name="submit">
                            <?php
                                    if($unique_brand_check == false){
                                       echo  '<a href="./brand.php" class="btn btn-outline-primary">Back</a>';
                                    }
                                    ?> 
                        </form>
                    </div>
                    <div class="col-6">
                        <table class="table">
                            <thead class="table-dark">

                            
                              <tr>
                                <th scope="col">Brand Id</th>
                                <th scope="col">Brand Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                              </tr>
                            </thead>
                            <tbody>
                            
                            <?php
                                $all_brand_name = "SELECT * FROM brand";
                                $brand_data = $conn -> query($all_brand_name);
                                while($fetch_brand_data = $brand_data -> fetch_assoc()):
                            ?>

                              <tr>
                                <th scope="row"><?php echo $fetch_brand_data['id']?></th>
                                <td><?php echo $fetch_brand_data['brand_name'] ?></td>
                                <td>
                                    <a href="#" class="btn btn-outline-primary btn-sm">View</a>
                                    <a href="brand-update.php?id=<?php echo $fetch_brand_data['id']?>" class="btn btn-outline-warning btn-sm">Update</a>
                                    <a href="#" class="btn btn-outline-danger btn-sm">Delete</a>                     
                                </td>
                                <td><?php echo  $fetch_brand_data['created_at'] ?></td>
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