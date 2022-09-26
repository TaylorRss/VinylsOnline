<?php include "connvinyl.php";


//GET the ID from URL from albums.php
$id = ( isset($_GET["id"]) && !empty($_GET["id"]) ? $_GET["id"] : "");


$query = "SELECT * FROM vinyls WHERE ID = '$id'";

$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($result)) {     
    $artist=$row['Artist'];
    $album=$row['Album'];
    $year=$row['Year'];
    $genre=$row['Genre'];
    $albumcover=$row['AlbumCover'];
    $dateadded=$row['DateAdded'];
    $price=$row['Price'];
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
    <title><?=$artist?> : <?=$album?> | Buy Vinyls Online</title>
</head>

    <!-- <div class="special-info">
        <p>Summer is nearly here, Shake off the Winter Blues with some new vinyl</p>
        <p>Shop with 10% off with Code: SPRING</p>
</div> -->
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

    <section class="selected-album">
    <!-- Image -->
    <div class="split right">
    <img src="../elements/<?=$albumcover?>" alt="<?=$albumcover?>" class="album-cover">    
    </div>

    <!--Album Image and Info here -->
    <div class="split left">

    <!-- Album Title and Year of Release displayed using PHP -->
    <h2 class="album-title"><?=$album?> <?=$year?></h2>

    <!-- Album Artist displayed using PHP -->
    <p class="album-artist"><?=$artist?></p>
    <!-- Album Price displayed using PHP -->
    <p class="album-price">£<?=$price?></p>
    <!-- Album ID displayed using PHP as a Cat Num -->
    <p class="album-cat"> Cat no. <?=$id?> </p>
     <!-- Album Genre displayed using PHP -->
    <p class="album-genre"><?=$genre?></p>
       
    <!-- IF Database in the future contains a Description Field, It would be inputted into this paragraph -->
    <p class="album-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
         Pulvinar neque laoreet suspendisse interdum consectetur. Luctus venenatis lectus magna fringilla urna porttitor rhoncus. Lacinia quis vel eros donec ac odio tempor orci. Mi in nulla posuere sollicitudin aliquam. 
        Lacus luctus accumsan tortor posuere ac ut consequat. Elementum curabitur vitae nunc sed velit dignissim sodales ut. 
         Magna fringilla urna porttitor rhoncus dolor purus non enim praesent. Pellentesque eu tincidunt tortor aliquam nulla facilisi cras fermentum odio.</p>

    <a href="#" class="btn album-button">Add to Cart</a>
    </div>


       </section>

    <!-- Recommendation Section -->
    <section class="album-recommend">
        <h2>You may also like</h2>

        <div class="recommend__container">
        <?php
        $query = "SELECT * FROM vinyls WHERE Genre LIKE '%$genre%' LIMIT 5";

        $result=mysqli_query($conn, $query);
        
            //display the result of the array
            //NOTICE: short echo tag <?= which is a short-hand to <?php echo
            while($row = mysqli_fetch_array($result)) {     
                $artist=$row['Artist'];
                $album=$row['Album'];
                $year=$row['Year'];
                $genre=$row['Genre'];
                $albumcover=$row['AlbumCover'];
                $dateadded=$row['DateAdded'];
                $price=$row['Price'];        
        ?>

<a href="selected.php?id=<?=$row['ID']?>"><img src="../elements/<?=$albumcover?>" class="<?=$album?> by <?=$artist?>"></a>
            <?php }?>
        </div>
    </section>


    <!-- Footer with 3 sections and Social Media Icons -->
    

</body>

</html>