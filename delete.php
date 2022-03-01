<?php
include 'connect.php';
if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $delete_sql="DELETE FROM crud1 WHERE id='$id'";
    if($result=mysqli_query($conn, $delete_sql)){
        header('location:view.php');
    }
}
?>