<?php
    require_once 'meta_data.php';
    require_once 'functions.php';

    header('location:index.php');

    $connection = new mysqli($hostname,$username,$password,$database);

    if($connection->connect_error)
    {
        die($connection->connect_error);
    }
    else
    {
        echo "connected to the data baase sucsefully <br>";
    }

    if(isset($_POST['username'])&& isset($_POST['password'])&& isset($_POST['email']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email =$_POST['email'];
        
        // sanitaizing the variables
        $username=sanitizeMysql($connection,"$username");
        $password=sanitizeMysql($connection,"$password");
        $email=sanitizeMysql($connection,"$email");

        
        // hashing the password
        $password=hash('ripemd128',"$password");


        $query = "INSERT INTO user_credentials VALUES(NULL, '$username', '$password', '$email')";
        $result   = $connection->query($query);
        if (!$result)
        { 
        echo "INSERT failed: $query<br>" .
        $connection->error . "<br><br>";
        }
        
        else
        {
            echo"data passed succesfuly";
        }
}
       
    // echo sanitizeString("sathira umesh@?????");
?>



