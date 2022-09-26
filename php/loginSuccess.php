<?php
include "connvinyl.php";
session_start();

//Login Check - If the session is not registered
//redirect back to the main login page
if (!isset($_SESSION['Email'])) {
    header('location: ../register.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="../css/media.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VinylsOnline | Buy Vinyls Online</title>
</head>
<body>
  <nav class="navbar-alt">
           
           <div> 
                   <a href="../latest.php">Latest</a>
                   <a href="#">Staff Picks</a>
                   <a href="../album.php">Albums</a>
           </div>
   
           
           <h1 class="logo">
                  <a href="../index.php">VinylsOnline</a>
              </h1>
           
   
   
              <div> 
                      <a href="../search.php">Search</a>
                      <a href="../sell.php">Sell</a>
                      <a href="../login.php">Account</a>
                      
              </div>
       
       </nav>

    <section class="login-options">
    <h2>Hello <?= $_SESSION['UserID']?> You are logged in</h2>


    <div class="row">

    <div></div>
    <div></div>
    <div></div>

    
    </div>


    <ol>
        <li><a href="../addrecord.php">Add New Records</a></li>
        <li><a href="update/updateList.php">Delete or Update</a></li>
        <li><a href="../login.php">Logout Here</a></li>
    </ol>
    
    </section>

    <!-- Instagram Showcase -->
    <section class="instagram-showcase">
        <h2>However you vibe, Own it</h2>

        <!--  Instagram Box -->
        <a><div class="instagram-box">
        <p class="instagram-box__text">@VinylsOnline</p>
        </div></a>

        <div class="showcase__container">
            <img src="../elements/showcase/photo8.jpg">
            <img src="../elements/showcase/photo3.jpg">
            <img src="../elements/showcase/photo4.jpg">
            <img src="../elements/showcase/photo2.jpg">
            <img src="../elements/showcase/photo7.jpg">
            <img src="../elements/showcase/photo5.jpg">
        </div>
    </section>


    <!-- Footer with 3 sections and Social Media Icons -->
    <footer>
        <div class="footer-container">

        <!--  Contact Info -->
        <div>
        </div>

        <!-- Shop -->
        <div>
        <h3>Shop</h3>

        <ul>
            <li>Staff Picks</li>
            <li>New Arrivals</li>
            <li>Albums</li>
        </ul>
        </div>

        <!-- Account -->
        <div>
        <h3>Account</h3>
        
        <ul>
            <li>Sell</li>
            <li>Register</li>
            <li>Login</li>
        </ul>
        </div>
        
        </div>

        <!-- Copyright Section -->
        <section class="footer__copyright">
            <p class="copyright_text">Copyright &copy; VinylsOnline 2022</p>
        </section>
    </footer>

</body>

<script src="jquery/jquery-ui.js"></script>
<script src="jquery/jquery-ui.min.js"></script>
<script src="js/scroll.js"></script>

</html>