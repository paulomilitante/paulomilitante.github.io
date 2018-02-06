<nav class="teal darken-4">
  <div class="nav-wrapper">
    <a href="index.php" class="brand-logo"><img class="imgLogo" src="assets/logo.png"></a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <?php 
        if (isset($_SESSION['username'])) {
          if ($_SESSION['role'] === '3')
          echo "<li><a class='dropdown-button' href='#' data-activates='profileDropdown'>Hello ".ucfirst($_SESSION['firstname'])."!<i class='material-icons right'>arrow_drop_down</i></a></li>";
          elseif ($_SESSION['role'] !== '3')
            echo "<li><a href='dashboard.php'>Dashboard</a></li>";            
        }
        else {
          echo "<li><a href='login.php'>Log In</a></li>";
        }        
      ?>
      <li><a href="items.php">Products</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <?php 
        if (isset($_SESSION['username']))
          echo "<li><a href='logout.php'>Log Out</a></li>";
      ?>
    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li class='center-align'><a href="#"><img class="imgLogo1" src="assets/logo2.png"></li>
      <?php 
        if (isset($_SESSION['username'])) {
          if ($_SESSION['role'] === '3')
          echo "<li><a class='dropdown-button' href='#' data-activates='profileDropdown1'>Hello ".ucfirst($_SESSION['firstname'])."!<i class='material-icons right'>arrow_drop_down</i></a></li>";
          elseif ($_SESSION['role'] !== '3')
            echo "<li><a href='dashboard.php'>Dashboard</a></li>";            
        }
        else {
          echo "<li><a href='login.php'>Log In</a></li>";
        }        
      ?>
      <li><a href="items.php">Products</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <?php 
        if (isset($_SESSION['username']))
          echo "<li><a href='logout.php'>Log Out</a></li>";
      ?>
    </ul>
  </div>
</nav>
<ul id="profileDropdown" class="dropdown-content">
  <li><a href="user_orders.php">My Orders</a></li>
  <li><a href="edit_profile.php">Edit Profile</a></li>
</ul>
<ul id="profileDropdown1" class="dropdown-content">
  <li><a href="user_orders.php">My Orders</a></li>
  <li><a href="edit_profile.php">Edit Profile</a></li>
</ul>