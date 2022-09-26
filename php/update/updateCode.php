<?php include "../connvinyl.php";

//WORKS - 23.03.22


function redirect_to( $location = NULL ) {
    if ($location !=NULL) {
        header("Location: {$location}");
        exit;
    }
}

//IF User clicks on the Update Button, 
if (isset($_POST['update'])) {
    $id = $_POST['ID'];
    $artist=$_POST['Artist'];
    $album=$_POST['Album'];
    $year=$_POST['Year'];
    $genre=$_POST['Genre'];
    $albumcover=$_POST['AlbumCover'];
    $dateadded=$_POST['DateAdded'];
    $price=$_POST['Price'];

    $query = "UPDATE vinyls SET
                Artist = '$artist',
                Album = '$album',
                Year = '$year',
                Genre = '$genre',
                AlbumCover = '$albumcover',
                DateAdded = '$dateadded',
                Price = '$price' WHERE ID = '$id'";

            $result = mysqli_query($conn, $query);
            redirect_to('updateList.php');

    //IF User clicks on the Delete Button, 
    } else if (isset($_POST['delete'])) {
        $id = $_POST['ID'];
        $artist=$_POST['Artist'];
        $album=$_POST['Album'];
        $year=$_POST['Year'];
        $genre=$_POST['Genre'];
        $albumcover=$_POST['AlbumCover'];
        $dateadded=$_POST['DateAdded'];
        $price=$_POST['Price'];
    
        $query = "DELETE FROM vinyls WHERE id = '$id' LIMIT 1";

            $result = mysqli_query($conn, $query);
            redirect_to('updateList.php');
    
    }
?>