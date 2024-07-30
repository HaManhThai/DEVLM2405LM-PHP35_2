<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li> -->

      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?view=about" class="nav-link">About</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?view=products" class="nav-link">Products</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?view=services" class="nav-link">Services</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?view=contact" class="nav-link">Contact</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <?php
            if(isset($_COOKIE["name"]) && isset($_COOKIE["pass"])){
        ?>        
                <a href="index.php?view=logout" class="nav-link">Logout</a>
        <?php
            }else{
        ?>        
                <a href="index.php?view=login" class="nav-link">Login</a>
        <?php
            }
        ?>
        
      </li>
     
    </ul>



  </nav>