<?php

    include 'db/db.php';
    include 'db/function.php';

    $valid[] ='';
    $id = $_GET['id'];
    $post_sql = "SELECT * FROM post WHERE post_id='$id'";
    $post_data = $conn -> query($post_sql);
    $fetch_post_data = $post_data -> fetch_assoc();
    if(isset($_POST['post_submit'])){

        $post_title = $_POST['post_title'];
        $post_content = $_POST['post_content'];
        $post_category = $_POST['category'];

        if(empty($post_title) || empty($post_content)){
            $valid[] = "<p class='alert alert-danger px-5 p-3'>All Fields Required</p>";      
        }else{

            // Photo validation + Upload DataBase
           // -----------------------------------
            $data = photo_upload($_FILES['featured_photo'],'assets/post/');
            $photo_data = $data['file_name'];
            if ( $data['status'] == 'yes' ) {
                $sql = "UPDATE post SET post_title = '$post_title', post_content='$post_content', featured_photo='$photo_data',category='$post_category' WHERE post_id='$id'";
                $conn -> query($sql);
               set_msg('Successfully Updated');
               header("location: add-post.php");
           }
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include 'enqueue.php' ?>
    <title>Post Update</title>
</head>
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
            <?php

            if ( count($valid)>0) {
                foreach ($valid as $v) {
                echo $v;
                }
            }
            get_msg();
            ?>

            <form action="<?php $_SERVER['PHP_SELF']?>" method = "POST" enctype='multipart/form-data'>
                <div class="form-group m-5">
                    <div class="add-post-section mt-3 mb-3">
                        <label class="h2">Post Title</label>
                        <input type="text" class="form-control mt-2" id="exampleFormControlInput1" name="post_title" value="<?php echo $fetch_post_data['post_title'] ?>">
                    </div>
                    <label class="h2 mt-4">Post Description</label>
                    <textarea style="width: 100%;" class="ckeditor mt-3 mb-3" name="post_content" id=editor><?php echo $fetch_post_data['post_content'] ?></textarea> <!-- CKEditor  !-->
                    <div class="mt-3 mb-3">
                        <select class="form-select w-25 mb-4" aria-label="Default select example" name="category">
                        <?php
                              $data_post_category = $fetch_post_data['category'];
                              $all_category = "SELECT * FROM post_category";
                              $all_category_data = $conn -> query($all_category);
                              while($fetch_category_data = $all_category_data -> fetch_assoc()):
                              if($data_post_category == $fetch_category_data['category_name']){
                                    $select_category = 'selected';
                                   
                                }else{
                                    $select_category = '';
                                }
                            ?>
                            <!-- <option selected>Select Category</option> -->
                            <option value="<?php echo $fetch_category_data['category_id'];?>" <?php echo $select_category ?> ><?php echo $fetch_category_data['category_name'] ?></option>
                            <?php endwhile ?>
                        </select>
                        <label for="formFile" class="form-label">Featured Image Height 350 * Width 450</label>
                        <input class="form-control w-25" type="file" id="formFile" name="featured_photo">
                    </div>
                    <input class="btn btn-success mt-3" type="submit" name="post_submit" value="Update">
                </div>
                
            </form>
            <!-- Main Content End -->

            <?php include './footer.php'; ?>
</body>
</html>