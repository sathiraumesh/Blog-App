<?php

    function sanitizeString($variable)
    {
     $variable=stripslashes($variable);
     $variable=strip_tags($variable);
     $variable=htmlentities($variable);
    return $variable;
    }

    function sanitizeMysql($connection,$variable)
    {
     $variable=$connection->real_escape_string($variable);
     $variable= sanitizeString($variable);
     return $variable;
     }     
?>