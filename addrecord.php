<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VinylsOnline | Buy Vinyls Online</title>
</head>
<body>
<nav class="navbar-alt">
           
           <div> 
                   <a href="latest.php">Latest</a>
                   <a href="#">Staff Picks</a>
                   <a href="album.php">Albums</a>
           </div>
   
           
           <h1 class="logo">
                  <a href="index.php">VinylsOnline</a>
              </h1>
           
   
   
              <div> 
                      <a href="search.php">Search</a>
                      <a href="sell.php">Sell</a>
                      <a href="login.php">Account</a>
                      
              </div>
       
       </nav>

    <!-- Add Record/Item - Use Form that links to the PHP Files
    -->
    <section class="add-record">
    <h2>Upload Vinyl/Record</h2>

    <div class="upload-container">
    <!-- WORKS - 17.02.22 - Error that occured was Photo Adding to DB that didn't have a Photo Field -->       
    <form action="php/upload/uploadCode.php" method="post" enctype="multipart/form-data" class="uploadForm">
        
        <input type="text" name="photoname">
        <input type="text" name="Artist" placeholder="Artist/Band">
        <input type="text" name="Album" placeholder="Album">
        <input type="text" name="Year" placeholder="Year of Release">
        <input type="text" name="Genre" placeholder="Genre">
        <input type="text" name="Price" placeholder="Price">


    
        <!-- User uploads Image here -->
        <input type="file" name="photo" id="fileSelect">
        <input type="submit" name="submit" value="Upload">
        <p>Note: Only .JPG, .JPEG, .GIF, .PNG formats allowed to a max size of 5 MB</p>
     </form>
    </div>

    </section>

   <!-- Instagram Showcase -->
   <section class="instagram-showcase">
        <h2>However you vibe, Own it</h2>

        <!--  Instagram Box -->
        <a><div class="instagram-box">
        <p class="instagram-box__text">@VinylsOnline</p>
        </div></a>

        <div class="showcase__container">
            <img src="elements/showcase/photo8.jpg">
            <img src="elements/showcase/photo3.jpg">
            <img src="elements/showcase/photo4.jpg">
            <img src="elements/showcase/photo2.jpg">
            <img src="elements/showcase/photo7.jpg">
            <img src="elements/showcase/photo5.jpg">
        </div>
    </section>


    <!-- Footer with 3 sections and Social Media Icons -->
    <footer>
        <div class="footer-container">

        <!--  Contact Info -->
        <div>
        <h3 class="footer-title">VinylsOnline</h3>
        </div>

        <!-- Shop -->
        <div>
        <h3>Shop</h3>

        <ul>
            <li><a href="latest.php">Latest</a></li>
            <li><a href="#">Staff Picks</a></li>
            <li><a href="album.php">All Albums</a></li>
            <li><a href="#">Upcoming Releases</a></li>
        </ul>
        </div>

        <!-- Account -->
        <div>
        <h3>Account</h3>
        
        <ul>
            <li><a href="sell.php">Sell</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
        </div>
        
        </div>

        <!-- Copyright Section -->
        <section class="footer__copyright">
            <p class="copyright_text">Copyright &copy; VinylsOnline 2022</p>
        </section>
    </footer>


</body>

<script src="js/scroll.js"></script>

</html>