<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
            <div class="container">
                <a href="index.php" class="navbar-brand" style="color:grey">Lifestyle Store</a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon" style="color:grey" ></span>
                </button>
                <div id="navmenu" class="navbar-collapse collapse">
                    <ul class="me-auto d-none d-lg-block" style="color:black">.</ul>
                    <ul class="navbar-nav">
<?php
 if (!isset($_SESSION['email'])) {
 ?>
                        <li class="nav-item"><a href="Sign_up.php" class="nav-link space" style="color:grey"><i class="fas fa-user"></i> Sign up</a></li>                        
                        <li class="nav-item"><a href="Login.php" class="nav-link space" style="color:grey"><i class="fas fa-sign-in-alt"></i> Login</a></li>
 <?php 
 } else {
 ?>                        
                        <li class="nav-item"><a href="Cart.php" class="nav-link space" style="color:grey"><i class="fas fa-shopping-cart"></i> Cart</a></li>
                        <li class="nav-item"><a href="Setting.php" class="nav-link space" style="color:grey"><i class="fas fa-user"></i> Setting</a></li>
                        <li class="nav-item"><a href="Logout.php" class="nav-link space" style="color:grey"><i class="fas fa-sign-in-alt"></i> Logout</a></li>
<?php 
} 
?>
                    </ul>
                </div>
            </div>
        </nav>