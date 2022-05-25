<?php
    $server="localhost";
    $user="root";
    $password="";
    $db="iMovies";
    $conn=mysqli_connect($server,$user,$password,$db);
    if(!$conn){
        die("We can't connect to the database");
    }

?>