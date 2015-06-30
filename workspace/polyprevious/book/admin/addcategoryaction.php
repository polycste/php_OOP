<?php
require_once('connect.php');
  $nameErr = $category_name = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["category_name"])) {
    echo  $nameErr = "category is required<br>";
   } else {
$category_name = $_POST["category_name"] ;
   }
  
}

if(!$nameErr){
    $sql="INSERT INTO `category` (`id`, `name`) VALUES (NULL, '$category_name')";
  
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