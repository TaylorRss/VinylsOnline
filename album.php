<?php include "php/connvinyl.php";


//Get the ID from URL
//isset makes sure there is an id and that it's not empty

$ID=(isset($_GET['ID']) && !empty($_GET['ID']) ? $_GET['ID'] : "");
$query = "SELECT * FROM vinyls";

$result=mysqli_query($conn, $query);

    //display the result of the array
    //NOTICE: short echo tag <?= which is a short-hand to <?php echo

     //Retrives the Number of Results for total number of Albums
     $num_rows = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VinylsOnline | Buy Vinyls Online</title>
</head>
<body>
<header class="alt-header">
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

        <div class="alt-text-box">
            <h1 class="heading-primary">
                <span class="heading-primary-main">The Home of Vinyls.</span>
                <span class="heading-primary-sub">All Albums.</span>
            </h1>

        </div>
    </header>

    <!-- Trending Albums - Rows of 3: Might include Button at the bottom
    saying More 
    -->
    <section class="trending-albums">
        <h2>All Albums (<?="$num_rows"?> Items)</h2>

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
        <a href="php/selected.php?id=<?=$row['ID']?>"><img src="elements/<?=$albumcover?>" alt="<?=$albumcover?>">
                <h3><?=$album?></h3>
                <p><?=$artist?></p>
                <p>£<?=$price?></p></a>
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

<script src="jquery/jquery-ui.js"></script>
<script src="jquery/jquery-ui.min.js"></script>
<script src="js/scroll.js"></script>

</html>