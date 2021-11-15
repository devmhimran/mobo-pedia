<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AutoComplete Search Using Bootstrap 4, PHP, PDO - MySQL & Ajax</title>
  <?php include './enqueue_style.php' ?>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css"> -->

</head>

<body class="bg-info">

    <section class="first-section">
      <div class="container py-3">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
              <a class="navbar-item" href="./index.php">
                <img class='site-logo' src="./assets/img/mobo-pedia.png" width="112" height="28">
              </a>
          
              <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
              </a>
            </div>
          
            <div id="navbarBasicExample" class="navbar-menu">
              <div class="navbar-end">
                <div class="navbar-start">
                    <a href="./index.php" class="navbar-item mx-2">Home</a>
              
                    <a href="./brand.php" class="navbar-item mx-2">Brand</a>
                    <a href="./all-phones.php" class="navbar-item mx-2">All Phones</a>
                    <a href="./suggesions.php" class="navbar-item mx-2">Sugessions</a>
                    <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link mx-2">Blog</a>
                    <div class="navbar-dropdown">
                        <a href="./post-category.php" class="navbar-item">Blog Category</a>
                        <a href="./all_post.php" class="navbar-item">Latest Post <span class="tag is-link ml-3">New</span>
                        </a>
                      </div>
                    </div>
                  </div>

                    <form action="search.php" method="POST">
                      <div class="navbar-item mx-2">
                        <div class="field has-addons">

                            <div class="control">
                              <input class="input" id="search" type="text" name="search" placeholder="Find a repository" autocomplete="off" >
                            </div>
                            <div class="control">
                                <input type="submit" class="button " value="Search" name="search_btn">
                            </div>
                            
                              <div class="search-panel" id="show-list">   
                              </div>

                          </div>
                    </div>
                  </form>
              </div>
            </div>
          </nav>
    </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./search.js"></script>
</body>

</html>