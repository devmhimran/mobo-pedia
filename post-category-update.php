<?php

    include 'db/db.php';
    include 'db/function.php';
    $id = $_GET['id'];
    // $category_name = $_POST['category_name'];
    $category_name_sql = "SELECT * FROM post_category WHERE category_id='$id'";
    $category_data = $conn -> query($category_name_sql);
    $fetch_category_data = $category_data -> fetch_assoc();
    if(isset($_POST['submit'])){

        $category = $_POST['category_name'];
        $unique_brand_check = unique_check($conn, 'category_name', 'post_category',$category);

        if(empty($category)){
            $valid = "<p style='color:red;'>Field Is Empty</p>";       
        }elseif($unique_brand_check == false){
            $valid = "<p style='color:red;'>Already Exists</p>";
        }
        else{
            $sql = "UPDATE post_category SET category_name = '$category' WHERE category_id = '$id';";
            $conn -> query($sql);
            set_msg('Successfully Publish');
            header("location:post-category.php");
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
    <title>Post Category</title>
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
            <?php get_msg(); ?>
            <div class="brand m-3">
                <div class="row m-3"> 
                    <div class="col-5 ">
                        <form action="<?php $_SERVER['PHP_SELF']?>" method = "POST" enctype='multipart/form-data'>
                            <h2 class="mb-3">Add Category</h2>
                            <input type="text" class="form-control mb-3 w-75" id="exampleFormControlInput1" placeholder="Type Category Name" name="category_name" value="<?php echo $fetch_category_data['category_name'] ?>">
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
                                $i = 1;
                                $all_category_name = "SELECT * FROM post_category ORDER BY category_id DESC";
                                $category_data = $conn -> query($all_category_name);
                                while($fetch_category_data = $category_data -> fetch_assoc()):
                            ?>

                              <tr>
                                <th scope="row"><?php echo $i; $i++; ?></th>
                                <td><?php echo $fetch_category_data['category_name'] ?></td>
                                <td>
                                    <a href="./main-site/single-category.php?id=<?php echo $fetch_category_data['category_id'] ?>" class="btn btn-outline-primary btn-sm">View</a>
                                    <a href="post-category-update.php?id=<?php echo $fetch_category_data['category_id']?>" class="btn btn-outline-warning btn-sm">Update</a>
                                    <a id="delete_data" href="post-category-delete.php?id=<?php echo $fetch_category_data['category_id']?>" class="btn btn-outline-danger btn-sm">Delete</a>                     
                                </td>
                                <td><?php echo  $fetch_category_data['created_at'] ?></td>
                              </tr>
                              <tr>
                                <?php endwhile; ?>
                            </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
            <!-- Main Content End -->
    </div>
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