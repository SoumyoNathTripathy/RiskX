<?php

    $database= new mysqli("localhost","root","","database");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>