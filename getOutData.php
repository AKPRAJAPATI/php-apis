<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "students";

$conn = mysqli_connect($servername,$username,$password,$database);

$qry = "select * from student_tbl";
$raw = mysqli_query($conn,$qry);

while($res = mysqli_fetch_array($raw))
{
    $data[] = $res;
}
print(json_encode($data));
 
?>