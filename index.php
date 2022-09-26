<?php include "php/connvinyl.php";


//Get the ID from URL
//isset makes sure there is an id and that it's not empty

$ID=(isset($_GET['ID']) && !empty($_GET['ID']) ? $_GET['ID'] :"");
$query = "SELECT * FROM vinyls ORDER BY DateAdded DESC LIMIT 12";

$result=mysqli_query($conn, $query);

    //display the result of the array
    //NOTICE: short echo tag <?= which is a short-hand to <?php echo

?>

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

    <!-- <div class="special-info">
        <p>Summer is nearly here, Shake off the Winter Blues with some new vinyl</p>
        <p>Shop with 10% off with Code: SPRING</p>
</div> -->
<body>
    
  <header class="main-header">
  <nav>
           
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

        <div class="text-box">
            <h1 class="heading-primary">
                <span class="heading-primary-main">The Home of Vinyls.</span>
                <span class="heading-primary-sub">Music awaits.</span>
            </h1>

            <a href="album.php" class="btn btn-full">Find your Soundtrack</a>

        </div>
    </header>

    <!-- Trending Albums - Rows of 3: Might include Button at the bottom
    saying More 
    -->
    <section class="trending-albums">
        <h2>New Arrivals</h2>

        <!-- Rows of 3 start here -->
        <div class="row">

        <?php 

        while ($row = mysqli_fetch_array($result)) {
            $artist=$row['Artist'];
            $album=$row['Album'];
            $year=$row['Year'];
            $genre=$row['Genre'];
            $albumcover=$row['AlbumCover'];
            $price=$row['Price'];
        ?>

        <div class="trending-item"> <!--Item-->
        <img src="elements/<?=$albumcover?>" alt="<?=$albumcover?>">
                <h3><?=$album?></h3>
                <p><?=$artist?></p>
                <p>£<?=$price?></p>
              
            </div>

            <?php
            } //END the DB Loop so that ALL of the Products/Vinyl are displayed
            ?>

        </div>
    </section>

    <!-- Search Bar -->
    <section class="search-bar">
        <h2>Search</h2>
        <p>Use this to find what you are looking for</p>
        <form action="searchresult.php" method="post" class="search-form">
        <input type="text" name="search" placeholder="Search">
        <input type="submit" name="submit" value="submit">
        </form>

    </section>

    <!-- Opening Times -->

    <section class="opening-time">
        <div class="row">

    <!-- Image -->
    <div class="split left">
    <img src="https://via.placeholder.com/800" class="opening-image">
    </div>

    <!-- Opening Text -->
    <div class="split right">

        <h2>Vintage and Retro Records</h2>

        <p class="opening-text">VinylsOnline was founded in 2009, we traded at our first music festival in 2011 and now trade at numerous festivals over the summer. 
            We hold our Vintage Vinyl/Record Sale events with our partner Students' Unions: 
            Bath Students Union, Cardiff Students Union, Durham Students Union, Edinburgh University Students Association, Glasgow QMU, Leeds University Union, Leeds Beckett Students Union, Liverpool Guild of Students, Loughborough Students Union, Northumbria Students Union, Nottingham Trent Students, Oxford Brookes Union, Sheffield Students' Union.</p>
       
            <p class="opening-text">In September 2019 we launched our new online store. Stocking a range from Vintage classics to modern records. Over 100 items added each month in our <a href="latest.php">new arrivals</a> section. </p>
    </div>
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