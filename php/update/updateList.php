<?php   include "../connvinyl.php"; 

session_start();
$UserID = $_SESSION['UserID'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 18. Updating/Deleting Records</title>
    
</head>
<body>
    <?php
   
    //WORKS - 23.03.22
    //Query the Database Table
    $query="SELECT * FROM admin, vinyls WHERE vinyls.UserID = '$UserID' AND admin.UserID = vinyls.UserID";

    //Run the query against the mysqli query function
    $result=mysqli_query($conn, $query);

    //Create while loop and loop through result set
    while($row=mysqli_fetch_array($result)) {
        $artist=$row['Artist'];
        $album=$row['Album'];
        $year=$row['Year'];
        $genre=$row['Genre'];
        $albumcover=$row['AlbumCover'];
        $dateadded=$row['DateAdded'];
        $price=$row['Price'];
        $albumID=$row['UserID'];


        //Display the result of the array?>
    
        <table>
            <tr>
                <td><?= $albumID ?></td>
                <td><?= $artist;?></td>
                <td><?= "$album";?></td>
                <td><?= "$year";?></td>
                <td><?= "$genre";?></td>
                <td><?= "$albumcover";?></td>
                <td><?= "$dateadded";?></td>
                <td><?= "$price";?></td>
                <!--The next page uses the id that has been passed on the url 
                to find the corresponding data and then populate a form 
                with the details of the record selected. -->

                <!-- To access the id that was sent on the url, the $_GET function is used. -->
                <td> <a href="update.php?id=<?=$row['ID']?>">Update</a></td>
            </tr>
        </table>

<?php
    }
?>
</body>
</html>