<?php 


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
                    <a href="?logout=user-logout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
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
            <canvas id="badCanvas1" width="400" height="100"></canvas>

            <!-- Main Content End -->

            <?php include './footer.php'; ?>
</body>
</html>