<?php
include 'db.php';

$Engine1 = $_POST['e1'];
$Engine2 = $_POST['e2'];
$Engine3 = $_POST['e3'];
$Engine4 = $_POST['e4'];
$Engine5 = $_POST['e5'];
$Engine6 = $_POST['e6'];
$Switch1 = $_POST['switch1'];

$sql = "INSERT INTO engines (engine1, engine2, engine3, engine4, engine5, engine6, switch) VALUES 
('$Engine1', '$Engine2', '$Engine3', '$Engine4', '$Engine5', '$Engine6', '$Switch1')";

if(mysqli_query($conn,$sql)){
    echo $Engine1;
    echo "<br>";
    echo $Engine2;
    echo "<br>";
    echo $Engine3;
    echo "<br>";
    echo $Engine4;
    echo "<br>";
    echo $Engine5;
    echo "<br>";
    echo $Engine6;
    echo "<br>";
    echo $Switch1;
}
else{
    echo "error";
}

mysqli_close($conn);

?>