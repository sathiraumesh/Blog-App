<?php
session_start();
$userid=$_SESSION['id'];   
$articleId=$_POST['articleid'] ;  
$_SESSION['articleid']=$articleId;
 

if($userid==0){

    header('Location:login.php');
}   
         
?>

<?php

require_once 'login_meta_data.php';

$conn = new mysqli($hostname, $username, $password, $database);

if (!$conn) {
    die($conn->connect_error);
}else{
    // echo"name";
}

    
    $username=$_SESSION['username'];
    $userid=$_SESSION['id'];


    if($userid&&$username){
       
        $title=$_POST['title'];
        $description=$_POST['description'];
   
        $query= "SELECT * FROM  `articles` WHERE `article_id`=$articleId ";

        $result=$conn->query($query);
        $rows = $result->num_rows;
        
        //  $result->close();
       
        $conn->close();

        if($rows>0){
            for ($i = 0; $i < $rows; $i++) {
            
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $result->data_seek($i);
    
                $description = $row['description'];
                $topic = $row['title'];
                // echo $description;
            }
        }
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
                    <form action="update.php" method="post">

                       


                        
<?php
echo<<<_END

<div class="form-group">
<label for="title">Title</label>
<input type="text" class="form-control" id="title" name="title" value= $topic>
</div>

<div class="form-group" >
<label for="description">Description</label>
<textarea class="form-control" rows="20" id="description" name="description"> $description </textarea>
</div>
_END;
?>

                       

                        <div class="col-md-2">
                        <button type="submit" class="btn btn-success"> Update</button>
                        </div>

                     </form>

                </div>
                
            </div>
        </div>

        <?php require_once 'script_link.php';?>
    </body>
</html>