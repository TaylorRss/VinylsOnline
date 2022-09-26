<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckLogin - Task 16.</title>
</head>
<body>
    <?php

    include 'connvinyl.php';
    session_start();
    
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        //Saves UserName and Password into variable
        $Email = mysqli_real_escape_string($conn, $_POST['Email']);
        $Password = $_POST['Password'];

        $query = "SELECT * FROM admin WHERE Email='$Email'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);


        //Password retrieved from the database (hashed) - Task 15.
        $dbPassword = $row['Password'];

        //IF the password is correct, set session to Username
        //Allows the FirstName to display throughout the entire session

        if (password_verify($Password, $dbPassword)) {
            $_SESSION['Name'] = $row['FirstName'];
            $_SESSION['UserID'] = $row['UserID'];
            $_SESSION['Email'] = $row['Email'];
            $_SESSION['Phone'] = $row['Phone'];
            header("location:loginSuccess.php");
        }
        else {
            echo "Wrong Email or Password";
        }

    }

    ?>
</body>
</html>