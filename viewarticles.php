
<?php
require_once 'login_meta_data.php';

$conn = new mysqli($hostname, $username, $password, $database);

if (!$conn) {
    die($conn->connect_error);
}
        session_start();
    $userid=$_SESSION['id'];
   
 if(isset($_POST['delete']) && isset($_POST['articleid'])){
    $art_id=$_POST['articleid'];
    $query = "DELETE FROM `articles` WHERE `article_id`='$art_id' ";
    $result = $conn->query($query);


    }

if (isset($userid)) {
    $query = "SELECT `title`,`description`,`article_id` FROM `articles` WHERE `id`='$userid' ";
    $result = $conn->query($query);
    $rows = $result->num_rows;   
}




?>





<html>
    <head>
        <title>
            articles
        </title>

          <?php
require_once 'header_metadata.php';
?>

        
    </head>
    <body style="background-color:white;">
        <h1>
            <h1>view articles.php</h1>
        </h1>

        <div class="container">
            <div class="row">
                   <div class="col-12 col-sm-12 col-md-12">
                   <div class=" col-12 col-sm-12 col-md-12">

    <?php
    
    if ($rows > 0) {
        for ($i = 0; $i < $rows; $i++) {

            $row = $result->fetch_array(MYSQLI_ASSOC);
            $result->data_seek($i);
            $title=$row['title'];
            $description=$row['description'];
            $articleid=$row['article_id'];
           


   echo<<<_END
  
   <div class=" col-12 col-sm-6 col-md-6 well">
            
      <h1 style="text-align:center;">$title</h1>
      <hr>

      <h5 style="text-align:center;">$description</h5>
      <hr>

      <div col-sm-2 col-md-2>
            <form action="viewarticles.php" method="post">

            <input type="hidden" name="delete" value="yes">
            <input type="hidden" name="articleid" value="$articleid">
            <button type="submit" class="btn btn-danger"> delete</button>
            </form>
      </div>
      </div>
            
      
    
_END;
                        }
                
                    } 
                    ?>


                       </div>
                   </div> 
            </div>
        </div>
    </body>
</html>