<?php
$server ="localhost";
$user ="root";
$password ="";
$database ="phpcrud";

// connection string
$conn = mysqli_connect($server, $user, $password, $database);
if(!$conn){
    die(msqli_error($conn));
}

?>