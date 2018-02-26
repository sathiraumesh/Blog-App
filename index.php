<?php

require_once 'meta_data.php';


$connection = new mysqli($hostname,$username,$passwrod,$database);

if(!$connection)
{

    echo "connection  to the data base failed <br>";
    die($connection->connect_error);
}



if( isset($_POST['username']) && isset($_POST['password']))
{
   
    
    echo "The user name is ".$user_name."<br>";
    echo "The password is".$user_password."<br>";
    echo "The emai is ".$user_email."<br>";
}

   

echo<<<_END

<form action="index.php" method="post">
username <input type="text" name="username"><br>
password<input type="password" name="password"><br>
email <input type="text" name="email"><br>
<input type="submit" value="submit">
</form>
<a href="testsession.php"> test</a>



_END

?>
