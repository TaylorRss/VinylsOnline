<!-- WORKS - 23.03.22 -->

<?php include "../connvinyl.php";

//GET the ID from URL from updateList.php
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page - Task 18.</title>
</head>
<body>

<!--When the Submit Button is clicked, the updateCode.php script is run -->
<form action="updateCode.php" method="post">
    <table>

    <tr>
        <td><input type="text" name="ID" value= "<?="$id";?>"></td>
        <td><input type="text" name="Artist" value= "<?="$artist";?>"></td>
        <td><input type="text" name="Album" value= "<?="$album";?>"></td>
        <td><input type="text" name="Year" value= "<?="$year";?>"></td>
        <td><input type="text" name="Genre" value= "<?="$genre";?>"></td>
        <td><input type="text" name="AlbumCover" value= "<?="$albumcover";?>"></td>
        <td><input type="date" name="DateAdded" value= "<?="$dateadded";?>"></td>
        <td><input type="text" name="Price" value= "<?="$price";?>"></td>

        <td><input type="submit" name="update" value="Update Record"></td>
        <td><input type="submit" name="delete" value="Delete Record"></td>
        <!--When the Submit Button is clicked, the updateCode.php script is run -->
        </tr>
    </table>
    
</form>
    
</body>
</html>