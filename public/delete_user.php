<?php
 $server_name = "localhost";
 $username = "root";
 $password = "";
 $database = "myblog_db";

 $conn = new mysqli($server_name, $username, $password, $database);
 if (!$conn) 
     die("connection error");


$id = $_GET['id'];
echo "$id";
$sql="DELETE FROM posts WHERE id=$id";
$result=mysqli_query($conn,$sql);
if($result)
   header("Location: posts.php");
?>