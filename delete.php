<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "students";

$conn = mysqli_connect($servername,$username,$password,$database);

 
$id = $_POST['id'];

$qry = "DELETE FROM `student_tbl` WHERE `student_tbl`.`id` = $id";
$res = mysqli_query($conn,$qry);

if($res == true){
    $respose = "data deleted success";
}else{
    $respose = "data  not deleted";
}
echo json_encode($respose);


?>