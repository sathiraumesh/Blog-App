<?php
            header( 'Location:index.php');
        if($_POST['logout']=="logout"){
            session_start();
            $_SESSION=array();
            session_destroy();


        }
?>

<h1>this is the sign out</h1>