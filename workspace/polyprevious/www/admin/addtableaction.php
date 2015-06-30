<?php
require_once('connect.php');
  $nameErr = $tablename = $description =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["tablename"])) {
    echo  $nameErr = "Name is required<br>";
   } else {
$tablename = $_POST["tablename"] ;
   }
  
     if (empty($_POST["description"])) {
    echo  $nameErr = "description is required<br>";
   } else {
$description = $_POST["description"] ;
   }
   if (empty($_POST["table_type_id"])) {
    echo  $nameErr = "Table type id is required<br>";
   } else {
$table_type_id = $_POST["table_type_id"] ;
   }
  
}

if(!$nameErr){
  $sql ="INSERT INTO `table_info` (`table_id`, `tablename`, `description`, `table_type_id`) VALUES (NULL, '$tablename', '$description', 'table_type_id');";
    if($conn->query($sql) == TRUE)
    {
    echo "Inserted successfully";
  }
  else
    {
    echo "something is wrong";

  }
}
  else{
     echo "Access Denied";
  }
  
  

  ?>