<?php

include "../connvinyl.php";

$query= "SELECT * FROM vinyls ORDER BY ID DESC LIMIT 1";

$result=mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhotoList - Task 19.</title>
</head>
<body>
    
    <?php

    echo "Your File was uploaded successfully.";
    while ($row = mysqli_fetch_array($result)) {
        $id=$row['ID'];
        $artist=$row['Artist'];
        $album=$row['Album'];
        $albumcover=$row['AlbumCover'];

        $year=$row['Year'];
        $genre=$row['Genre'];
        $price=$row['Price'];
        
        ?>

        <section class="uploaded-image">
            
        <div class="row">
     <!-- Image -->
    <div class="split left">
    <img src="../../elements/<?="$albumcover"?>" alt="<?=$albumcover?>">
    </div>

    <!-- Opening Text -->
    <div class="split right">
        <p class="opening-text">Your File was uploaded successfully</p>
       
    </div>
    </div>
        <?php } ?>
        </section>

</body>
</html>