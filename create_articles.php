<?php
session_start();
$userid=$_SESSION['id'];          
if($userid==0){

    header('Location:login.php');
}   
         
?>

<?php

require_once 'login_meta_data.php';

$conn = new mysqli($hostname, $username, $password, $database);

if (!$conn) {
    die($conn->connect_error);
}

    
    $username=$_SESSION['username'];
    $userid=$_SESSION['id'];

    if(isset($_POST['title'])&& isset($_POST['description'])){

        $title=$_POST['title'];
        $description=$_POST['description'];
   
        $query= "INSERT INTO `articles` (`article_id`, `title`, `description`, `id`) VALUES (NULL, '$title', '$description', '$userid')";

        $result=$conn->query($query);

        //  $result->close();
       
        $conn->close();
    }
    
    
    

?>

<html>
    <head>
    <?php require_once 'header_metadata.php';
     $login=true;
    ?>
   

    </head>

    <body style="background-color:white;">

        <?php require_once 'header.php'?>

        <div class="container">
            <div class="row well">
                <div class="col-12 col-sm-12 col-md-12">
                    <form action="create_articles.php" method="post">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>


                        <div class="form-group" >
                            <label for="description">Description</label>
                            <textarea class="form-control" rows="20" id="description" name="description"></textarea>
                        </div>

                        <div class="col-md-2">
                        <button type="submit" class="btn btn-primary"> post</button>
                        </div>

                     </form>

                </div>
                
            </div>
        </div>

        <?php require_once 'script_link.php';?>
    </body>
</html>