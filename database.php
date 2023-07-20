<?php
$servername = "localhost";
$username = "root";
$passwoord = "";

$conn = mysqli_connect($servername,$username,$passwoord);

$qry = "CREATE DATABASE students";

$res = mysqli_query($conn,$qry);

if($res == true){
    $response = "Database created";
}else{
$response = "Database not created";
}
echo json_encode($response);

?>