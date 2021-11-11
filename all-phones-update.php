<?php

    include 'db/db.php';
    include 'db/function.php';

    $valid[] ='';
    if(isset($_POST['phone_submit'])){

        $phone_name = $_POST['phone_name'];
        $phone_brand = $_POST['phone_brand'];
        $phone_os = $_POST['phone_os'];
        $phone_screen = $_POST['phone_screen'];
        $phone_res = $_POST['phone_res'];
        $phone_ram = $_POST['phone_ram'];
        $phone_rom = $_POST['phone_rom'];
        $phone_cam_primary = $_POST['phone_cam_primary'];
        $phone_cam_secondary = $_POST['phone_cam_secondary'];
        $phone_battery = $_POST['phone_battery'];
        $phone_img = $_FILES['phone_img'];
        $phone_price = $_POST["phone_price"];

        if(empty($phone_name) || empty($phone_brand) || empty($phone_os) || empty($phone_screen) || empty($phone_res) || empty($phone_ram) || empty($phone_rom) || empty($phone_cam_primary) || empty($phone_cam_secondary) || empty($phone_battery) || empty($phone_img)){
            $valid[] = "<p class='alert alert-danger px-5 p-3'>All Fields Required</p>";      
        }else{

            // Photo validation + Upload DataBase
           // -----------------------------------
            $data = photo_upload($_FILES['phone_img'],'assets/phone_img/');
            $photo_data = $data['file_name'];
            if ( $data['status'] == 'yes' ) {
                $sql = "UPDATE phone SET phone_name = '$phone_name', phone_brand = '$phone_brand', phone_os = '$phone_os', phone_screen = '$phone_screen', phone_res = '$phone_res', phone_ram = '$phone_ram', phone_rom = '$phone_rom', phone_cam_primary = '$phone_cam_primary', phone_cam_secondary = '$phone_cam_secondary', phone_battery = '$phone_battery', phone_price = '$phone_price'";
                // $sql = "INSERT INTO phone (phone_name, 	phone_brand, phone_os, phone_screen, phone_res, phone_ram, phone_rom, phone_cam_primary, phone_cam_secondary, phone_battery, phone_img) values ('$phone_name','$phone_brand','$phone_os','$phone_screen', '$phone_res', '$phone_ram', '$phone_rom', '$phone_cam_primary', '$phone_cam_secondary', '$phone_battery', '$photo_data')";
                $conn -> query($sql);
               set_msg('Successfully Published');
               header("location: add-phone.php");
           }
        }
        
    }
    $id = $_GET['id'];
    $phone_sql = "SELECT * FROM phone WHERE phone_id='$id'";
    $phone_data = $conn -> query($phone_sql);
    $fetch_phone_data = $phone_data -> fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include 'enqueue.php' ?>
    <title>Add Phone</title>
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
                        <label class="h2">Phone Name</label>
                            <input type="text" class="form-control mt-2" id="exampleFormControlInput1" name="phone_name" value="<?php echo $fetch_phone_data['phone_name'] ?>">
                        </div>
                        <div class="col-sm-3 mt-3 mb-3">
                            <label class="h5">Brand</label>
                            <select class="form-select" id="specificSizeSelect" name="phone_brand">
                                <?php
                                $data_phone_brand = $fetch_phone_data['phone_brand']; 
                                $all_brand = "SELECT * FROM brand ";
                                $all_brand_data = $conn -> query($all_brand);
                                while($fetch_brand_data = $all_brand_data -> fetch_assoc()):
                                    if($data_phone_brand == $fetch_brand_data['id']){
                                        $select_brand = 'selected';
                                       
                                    }else{
                                        $select_brand = '';
                                    }
                                ?>
                            <option value="<?php echo $fetch_brand_data['id'] ?>" <?php echo $select_brand  ?>><?php echo $fetch_brand_data['brand_name'] ?></option>
                            <?php endwhile ?>
                            </select>
                        </div>
                        <h3>Software</h3>
                        <hr>
                        <div class="add-post-section w-50 mt-3 mb-3">
                        <label class="h5">OS</label>
                            <input type="text" class="form-control mt-2" id="exampleFormControlInput1" name="phone_os" value="<?php echo $fetch_phone_data['phone_os'] ?>">
                        </div>
                        <h3>Hardware</h3>
                        <hr>
                        <div class="add-post-section w-50 mt-3 mb-3">
                            <label class="h5">Screen</label>
                            <input type="text" class="form-control mt-2" id="exampleFormControlInput1" name="phone_screen" value="<?php echo $fetch_phone_data['phone_screen'] ?>">
                        </div>
                        <div class="add-post-section w-50 mt-3 mb-3">
                            <label class="h5">Resolution</label>
                            <input type="text" class="form-control mt-2" id="exampleFormControlInput1" name="phone_res" value="<?php echo $fetch_phone_data['phone_res'] ?>">
                        </div>
                        <h3>Memory</h3>
                        <hr>
                        <div class="add-post-section w-50 mt-3 mb-3">
                            <label class="h5">Ram</label>
                            <input type="text" class="form-control mt-2" id="exampleFormControlInput1" name="phone_ram" value="<?php echo $fetch_phone_data['phone_ram'] ?>">
                        </div>
                        <div class="add-post-section w-50 mt-3 mb-3">
                            <label class="h5">Rom</label>
                            <input type="text" class="form-control mt-2" id="exampleFormControlInput1" name="phone_rom" value="<?php echo $fetch_phone_data['phone_rom'] ?>">
                        </div>
                        <h3>Camera</h3>
                        <hr>
                        <div class="add-post-section w-50 mt-3 mb-3">
                            <label class="h5">Primary</label>
                            <input type="text" class="form-control mt-2" id="exampleFormControlInput1" name="phone_cam_primary" value="<?php echo $fetch_phone_data['phone_cam_primary'] ?>">
                        </div>
                        <div class="add-post-section w-50 mt-3 mb-3">
                            <label class="h5">Secondary</label>
                            <input type="text" class="form-control mt-2" id="exampleFormControlInput1" name="phone_cam_secondary" value="<?php echo $fetch_phone_data['phone_cam_secondary'] ?>">
                        </div>
                        <h3>Battery</h3>
                        <hr>
                        <div class="add-post-section w-50 mt-3 mb-3">
                            <label class="h5">Capacity</label>
                            <input type="text" class="form-control mt-2" id="exampleFormControlInput1" name="phone_battery" value="<?php echo $fetch_phone_data['phone_battery'] ?>">
                        </div>

                        <hr>
                        <div class="add-post-section w-50 mt-3 mb-3">
                            <label class="h5">Feature Image</label><br>
                            <img style="width:100px;" src="./assets/phone_img/<?php echo $fetch_phone_data['phone_img'] ?>" alt="">
                            <input type="file" class="form-control mt-2" id="exampleFormControlInput1" name="phone_img">
                        </div>
                        <div class="add-post-section w-50 mt-3 mb-3">
                            <label class="h5">Price</label>
                            <input type="number" class="form-control mt-2" id="exampleFormControlInput1" name="phone_price"  value="<?php echo $fetch_phone_data['phone_price'] ?>">
                        </div>
                        <hr>
                        <div class="add-post-section w-50 mt-3 mb-3">
                            <input type="submit" class="btn btn-primary" name="phone_submit" value="Publish">
                        </div>
                    </div>
                </form>
            <!-- Main Content End -->


    <?php include './footer.php'; ?>
</body>

</html>