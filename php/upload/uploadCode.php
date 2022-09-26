<?php include "../connvinyl.php";

session_start();
$UserID = $_SESSION['UserID'];

//Function that will redirect the browser to the page specifified
//when invoked

function redirect_to( $location = NULL) {
    if ($location != NULL) {
        header("Location: {$location}");
        exit;
    }
}


//1. Check if File was uploaded without Errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");

        //$_FILES["photo"]["name"] — This array value specifies the original name of the file, including the file extension. 
        //It doesn't include the file path.
        $filename = $_FILES["photo"]["name"];
        //$_FILES["photo"]["type"] — This array value specifies the MIME type of the file.
        $filetype = $_FILES["photo"]["type"];
        //$_FILES["photo"]["size"] — This array value specifies the file size, in bytes.
        $filesize = $_FILES["photo"]["size"];


//2. Verify file size - 5MB Maximum
    $maxsize = 5 * 1024 * 1024;
    if($filesize > $maxsize) die("Error: File Size is larger than allowed limit.");    


// 3. Check if the File type is allowed
        if(in_array($filetype, $allowed)) {


//4. Check wheather File exists before uploading it
 if(file_exists("../../elements/albumcovers/". $filename)) {
    echo "$filename already exists.";
} else {

    //IF all is verified then:
//5. Move the file from temporary location to upload folder.
move_uploaded_file($_FILES["photo"]["tmp_name"], "../../elements/albumcovers/" . $filename);


//6. Add the Photo Path into the Photos table
$photopath = $_FILES["photo"]["name"];

$artist = mysqli_real_escape_string($conn, $_POST["Artist"]);
$album = mysqli_real_escape_string($conn, $_POST["Album"]);
$year = mysqli_real_escape_string($conn, $_POST["Year"]);
$genre = mysqli_real_escape_string($conn, $_POST["Genre"]);
$price = mysqli_real_escape_string($conn, $_POST["Price"]);

//$sql = "INSERT INTO vinyls (Artist, Album, Year, Genre, AlbumCover, DateAdded, Price, UserID) VALUES ('$artist', '$album', '$year', '$genre',
//CONCAT('elements/albumcovers/', '$photopath'), '$date','$price', 1))";

$sql = "INSERT INTO vinyls (Artist, Album, Year, Genre, AlbumCover, Price, UserID) VALUES ('$artist', '$album', '$year' ,'$genre', CONCAT('albumcovers/', '$photopath'), '$price', '$UserID')";

$query = mysqli_query($conn, $sql);


//7. Redirect the browser to Photolist.php to see the updated photos 
//table content displayed in the browser
// redirect_to('photoList.php');
    }
}
else {
    echo "Error: " . $_FILES["photo"]["error"];
}
    }

?>