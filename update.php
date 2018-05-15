<?php
    session_start();
    $articleid= $_SESSION['articleid'];
    
    require_once 'login_meta_data.php';

    $conn = new mysqli($hostname, $username, $password, $database);
    
    if (!$conn) {
        die($conn->connect_error);
    }else{
    
    }
  $title=$_POST['title'];
  $description=$_POST['description'];

  
    $query= " UPDATE `articles` SET `title`='$title',`description`='$description' WHERE `article_id`='$articleid'";
    $result=$conn->query($query);
    
    header('Location:viewmyarticles.php');

?>