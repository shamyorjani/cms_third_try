<?php 

    $connection = mysqli_connect('localhost', 'root', '', 'cms');
    if(!$connection) {
        die("connection failed" . mysqli_connect_error());
    }

?>