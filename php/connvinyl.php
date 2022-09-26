<?php

//Connects to the VinylsOnline DB
$conn = mysqli_connect("localhost","root","","vinylsonline");

if(!$conn) //IF Database is not connected, Say this:
    {
        die("Connection Error:". mysqli_connect_error());
    } 
    else echo "";


?>