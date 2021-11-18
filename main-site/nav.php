<div class="preloader js-preloader flex-center">
  <img src="./assets/img/preloader.gif">
</div>
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
                              <input class="input" id="search" type="text" name="search" placeholder="Search Phone" autocomplete="off" >
                            </div>
                            <div class="control">
                                <input type="submit" class="button " value="Search" name="search_btn">
                            </div>
                            
                              <div class="search-panel">   
                                <div class="card" id="show-list">
                                  <!-- <a href="#"  >
                                    <div class="search-list p-4">
                                                       
                                      <img src="../assets/phone_img/6dfd8b79da207e9f6cceae34cca445f4.jpg" alt="">
                                      <p class="ml-3">name</p>
                                                        
                                    </div>
                                  </a> -->
                                </div>
                              </div>
                          </div>
                    </div>
                  </form>
              </div>
            </div>
          </nav>
    </div>
    </section>