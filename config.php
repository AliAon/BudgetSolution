<?php


//msql-connection
$mysqli = new mysqli("localhost", "root", "", "fertilizer_solution");
if ($mysqli->connect_error) {
    /* Use your preferred error logging method here */
    error_log('Connection error: ' . $mysqli->connect_error);
}else{
    echo 'connected';
}

?>