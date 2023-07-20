<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "students";

 $conn = mysqli_connect($servername,$username,$password,$database);
 if(!$conn){
    echo "Database not connected";
 }
 
$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];

$qry = "UPDATE `student_tbl` SET `name` = '$name', `lastname` = '$lastname' WHERE `student_tbl`.`id` = $id";

$res = mysqli_query($conn, $qry);

if($res == true)
{
    $response = "Data updated success";
}else{
    $response = "Data not updated";
}
echo json_encode($response);


?>
