<?php
    session_start();
    $username=$_SESSION['username'];
    $id=$_SESSION['id'];
    echo "the username is ".$username."<br>";

   
    echo "the id is ".$id;
?>

<h1>welcome to user home</h1>