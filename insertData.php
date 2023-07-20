<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "students";

$conn = mysqli_connect($servername,$username,$password,$database);

 
$name = $_POST['name'];
$lastname = $_POST['lastname'];
 


$qry = "INSERT INTO `student_tbl` (`id`, `name`, `lastname`) VALUES (NULL, '$name', '$lastname');";
$res = mysqli_query($conn,$qry);

if($res == true){
    $respose = "data added success";
}else{
    $respose = "data  not created";
}
echo json_encode($respose);


?>