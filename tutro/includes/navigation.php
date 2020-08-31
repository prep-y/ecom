
<?php
$sql="SELECT * FROM categories WHERE parent = 0";
$pquery=$mysqli->query($sql);
?>




<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
  <div class="container">
    <a href="index.php" class="navbar-brand">Gift Box Direct</a>
    <!--Men's clothing-->
    <ul class="navbar-nav mr-auto">
      <li class="dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Men
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Shirts</a>
          <a class="dropdown-item" href="#">Pants</a>
          <a class="dropdown-item" href="#">Shoes</a>
          <a class="dropdown-item" href="#">Accesories</a>

          
        </div>  
      </li>
  </div>
</nav>