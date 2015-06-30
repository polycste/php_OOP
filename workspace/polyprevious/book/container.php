<?php
require_once('admin/connect.php');
$sql="SELECT * from book";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{

     while($row = $result->fetch_assoc()) {
     $bookvar=  $row["name"];
     $pricevar=  $row["price"] ;
     $imgvar=  $row["imagename"] ;?>
<div style="border: 1pc solid grey; width: 300px; float: left; margin-left: 3px;color: red; margin-bottom: 4px;">
  <?php echo $bookvar ?> <br>
  <?php echo $imgvar ?> <br>
  <?php echo $pricevar ?>
  
</div>  

<?php
     }
} else {
     echo "0 results";
}

$conn->close();


?>