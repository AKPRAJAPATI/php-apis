<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "students";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn)
{
    echo "Connected in your database in MYSQL";
}else
{
    echo "Not connected in your database in MYSQL";
}

$qry = "CREATE TABLE student_tbl(id integer PRIMARY key AUTO_INCREMENT, name text , lastname text);";
$res = mysqli_query($conn,$qry);

if($res == true){
    $respose = "Table created success";
}else{
    $respose = "Table not created";
}
echo json_encode($respose);


?>