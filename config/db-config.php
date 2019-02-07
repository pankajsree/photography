<?php

    $server = "localhost";
    $user = "root";
    $pass="Pankaj@268";
    $database = "litmass";

    $conn = mysqli_connect($server, $user, $pass);

    if(!$conn) {
        die("Connection Failed !!!");
    }

    $db = mysqli_query($conn, "USE " . $database);

?>
