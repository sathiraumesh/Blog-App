<?php
    session_start();
    $username=$_SESSION['username'];
    $id=$_SESSION['id'];

    if($id==0){
            echo "".$id;
        header('Location:login.php');
    }
   
?>

<?php
    require_once 'login_meta_data.php';

    $conn = new mysqli($hostname, $username, $password, $database);

if (!$conn) {
    die($conn->connect_error);
}else{
    // echo"connected successfuly";
}
if (isset($id)) {
    $query = "SELECT `title`,`description`,`article_id` FROM `articles`  ORDER BY `article_id` DESC ";
    $result = $conn->query($query);
    $rows = $result->num_rows;   
    $viewarticles=true;
}

else{


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
    
      
     <h1 class="home-head">All Articles</h1>

<div class="col-12 col-sm-12 col-md-12 col-lg-12 new-posts">

<div class="container">
<h2></h2>
<?php
 if ($rows > 0) {
    for ($i = 0; $i < $rows; $i++) {

        $row = $result->fetch_array(MYSQLI_ASSOC);
        $result->data_seek($i);
        $title=$row['title'];
        $description=$row['description'];
        $articleid=$row['article_id'];
      

        echo<<<_END
  
<div class=" col-xs-12 col-sm-12 col-md-12 blog-cards  ">
<div class=" col-xs-12 col-sm-12 col-md-12 well card">
   <h1 class="blog-headers" style="text-align:center;">$title</h1>
   <hr>

   <h5 style="text-align:center;">$description</h5>



   </div>

   </div>
         
   
 
_END;
    }
}


?>
</div>
</div>



    <?php
        // require_once 'footer.php';
        require_once 'script_link.php'
      ?>
    </body>
</html>

