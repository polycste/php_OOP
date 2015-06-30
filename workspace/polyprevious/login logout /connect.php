<?php
$servername="localhost";
$username="root";
$password="123456";
$dbname="resturant";

//create connection

$conn=new mysqli($servername, $username, $password, $dbname);

//check connection

if($conn->connect_error)
{
  if($conn->connect_error)
  {
   die("connection falied:".$conn->connect_error); 
  }
  
}
?>