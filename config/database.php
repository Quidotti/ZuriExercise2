<?php

// $host = "localhost";
// $userName = "root";
// $userPass = "zindexallowcoding";
// $dbname = "zuriExercise";



$conn = mysqli_connect('localhost', 'root', 'zindexallowcoding', 'zuriExercise');

if(!$conn){

    die("Sorry Database connection fail" . mysqli_error());
}


?>