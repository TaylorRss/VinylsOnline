<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddAdmin - Use with Register - Security added via Task 15</title>
</head>
<body>
    <?php

    include 'connvinyl.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        //Variable names match the form field names and the friends table field names
        $firstname = mysqli_real_escape_string($conn, $_POST['FirstName']);
        $lastname = mysqli_real_escape_string($conn, $_POST['LastName']);
        $email = mysqli_real_escape_string($conn, $_POST['Email']);
        $phone = mysqli_real_escape_string($conn, $_POST['Phone']);
        
        //Password being Hashed to improve security - Task 15.
        $password= $_POST['Password'];

        $hash = password_hash($password, PASSWORD_ARGON2ID);

        //SQL Insert to add Records 
        $sql="INSERT INTO admin (FirstName, LastName, Email, Phone, Password) VALUES ('$firstname','$lastname','$email', '$phone', '$hash')";
    }

    //Check to make sure the INSERT QUERY Works
   if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_connect_error());   

    } else header("Location: ../login.php");
    die();
 
    ?>
</body>
</html>