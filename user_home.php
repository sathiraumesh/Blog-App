<?php
    session_start();
    $username=$_SESSION['username'];
    $id=$_SESSION['id'];

    if($id==0){
            echo "".$id;
        header('Location:login.php');
    }
   
?>

<html>
    <head>

    <title>home</title>
        <?php 
          require_once 'header_metadata.php';
          $login=true;
        ?>
    
    </head>

    <body style="background-color:white;color:black;">

        <?php require_once 'header.php';
        ?>
    
      
     


    <?php
        // require_once 'footer.php';
        require_once 'script_link.php'
      ?>
    </body>
</html>

