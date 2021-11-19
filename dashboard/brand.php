<?php

    include 'db/db.php';
    include 'db/function.php';
    include 'db/session.php';
    if(isset($_POST['submit'])){

        $brand = $_POST['brand_name'];
        $unique_brand_check = unique_check($conn, 'brand_name', 'brand',$brand);

        if(empty($brand)){
            $valid = "<p style='color:red;'>Field Is Empty</p>";       
        }elseif($unique_brand_check == false){
            $valid = "<p style='color:red;'>Already Exists</p>";
        }
        else{
            $data = photo_upload($_FILES['brand_logo'],'assets/brand_img/');
            $photo_data = $data['file_name'];
            if ( $data['status'] == 'yes' ) {

                $sql = " INSERT INTO brand (brand_name, brand_img) values ('$brand', '$photo_data')";
                $conn -> query($sql);
                set_msg('Successfully Publish');
               header("location:brand.php");
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
    <title>Brand</title>
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
            <?php get_msg(); ?>
            <div class="brand m-3">
                <div class="row m-3"> 
                    <div class="col-4 ">
                        <form action="<?php $_SERVER['PHP_SELF']?>" method = "POST" enctype='multipart/form-data'>
                            <h2 class="mb-3">Add Brand</h2>
                            <input type="text" class="form-control mb-3 w-75" id="exampleFormControlInput1" placeholder="Type Brand Name" name="brand_name">
                            <input type="file" class="form-control mb-3 w-75"  name="brand_logo">
                            
                            <small>
                            <?php if(isset($valid)){
                                echo $valid;
                            } ?>
                            </small>
                            <input type="submit" class="btn btn-primary" value="Publish" name="submit">
                            
                        </form>
                    </div>
                    <div class="col-7">
                        <table class="table">
                            <thead class="table-dark">

                            
                              <tr>
                                <th scope="col">Brand Id</th>
                                <th scope="col">Brand Image</th>
                                <th scope="col">Brand Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                              </tr>
                            </thead>
                            <tbody>
                            
                            <?php
                                $all_brand_name = "SELECT * FROM brand ORDER BY id DESC";
                                $brand_data = $conn -> query($all_brand_name);
                                $i=1;
                                while($fetch_brand_data = $brand_data -> fetch_assoc()):
                            ?>

                              <tr>
                                <td scope="row"><?php echo $i; $i++; ?></td>
                                <td scope="row"><img style="width:60px;" src="./assets/brand_img/<?php echo $fetch_brand_data['brand_img']?>" alt=""></td>
                                <td><?php echo $fetch_brand_data['brand_name'] ?></td>
                                <td>
                                    <a href="../single-brand.php?id=<?php echo $fetch_brand_data['id'] ?>" class="btn btn-outline-primary btn-sm">View</a>
                                    <a href="brand-update.php?id=<?php echo $fetch_brand_data['id']?>" class="btn btn-outline-warning btn-sm">Update</a>
                                    <a id="date_delete" href="./brand-delete.php?id=<?php echo $fetch_brand_data['id']?>" class="btn btn-outline-danger btn-sm">Delete</a>
                                                       
                                </td>
                                <td><?php echo  $fetch_brand_data['created_at'] ?></td>
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