<?php include "php/connvinyl.php";

//Reminder, this check is needed to make sure the form has been sent
if(isset($_POST['submit'])) {

    //User input is stored in variable called $name
    $search = $_POST['search'];

    //The SQL Query uses the user input in the variable for searching

    $query="SELECT * FROM vinyls WHERE Artist LIKE'%$search%' OR Album LIKE '%$search%' OR Genre LIKE '%$search%'";


    $result=mysqli_query($conn,$query);

    //Retrivies the Number of Results for Users Search
    $num_rows = mysqli_num_rows($result);

    } //close of if - num_rows
    else echo "No Records matching your Query were found.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="$num_rows"?> Results for "<?=$search?></title>
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


    <section class="trending-albums">
        <h2><?="$num_rows"?> Results for "<?=$search?>"</h2>

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


    <!-- Instagram Showcase -->
    <section class="instagram-showcase">
        <h2>However you vibe, Own it</h2>

        <!--  Instagram Box -->
        <a><div class="instagram-box">
        <p class="instagram-box__text">@VinylsOnline</p>
        </div></a>

        <div class="showcase__container">
            <img src="https://via.placeholder.com/400">
            <img src="https://via.placeholder.com/400">
            <img src="https://via.placeholder.com/400">
            <img src="https://via.placeholder.com/400">
            <img src="https://via.placeholder.com/400">
            <img src="https://via.placeholder.com/400">
        </div>
    </section>



    <!-- Footer with 3 sections and Social Media Icons -->
    <footer>
    </footer>

</body>

<script src="jquery/jquery-ui.js"></script>
<script src="jquery/jquery-ui.min.js"></script>
<script src="js/scroll.js"></script>

</html>