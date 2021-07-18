<?php
include 'db.php';

$path = $_POST['path'];


$sql = "INSERT INTO paths (path) VALUES 
('$path')";

if(mysqli_query($conn,$sql)){
    echo $path;
    header("refresh:3;url= ../../index.php");
}


mysqli_close($conn);

?>