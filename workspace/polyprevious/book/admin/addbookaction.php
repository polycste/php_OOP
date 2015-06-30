<?php
require_once('connect.php');
  $nameErr = $book_name = $price= $category = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["book_name"])) {
    echo  $nameErr = "Book is required<br>";
   } else {
$book_name = $_POST["book_name"] ;
   }
  
     if (empty($_POST["price"])) {
  echo  $nameErr = "Price is required<br>";
   } else {
 $price = $_POST["price"] ;
   }
  
      if (empty($_POST["book_image"])) {
  echo  $nameErr = "Book image is required<br>";
   } else {
 $book_image = $_POST["book_image"] ;
   }
  
       if (empty($_POST["category"])) {
  echo  $nameErr = "category is required<br>";
   } else {
  $category = $_POST["category"] ;
   }
}

if(!$nameErr){
    $sql="INSERT INTO `book` (`id`, `name`, `price`,'imagename', `category_id`) VALUES (NULL, '$book_name', '$price','book_image', '$category')";
  
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