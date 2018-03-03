<?php
    session_start();
    $username=$_SESSION['username'];
    $id=$_SESSION['id'];
    
?>

<html>
    <head>

    <title>home</title>
        <?php 
          require_once 'header_metadata.php';
        ?>
    
    </head>

    <body style="background-color:white;color:black;">

        <?php require_once 'header.php';
        ?>
    
        <a href="">hellow</a>
     


    <?php
        // require_once 'footer.php';
        require_once 'script_link.php'
      ?>
    </body>
</html>

