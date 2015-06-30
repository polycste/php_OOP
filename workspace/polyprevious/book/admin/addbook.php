<?php require_once('connect.php'); ?>
<div id="sidebar2">

         <h1>Add Book</h1><br />
		 <form action="addbookaction.php" method="POST">
       Book Code:&nbsp; &nbsp; <input type="text" name="product_code"  size="50" value="maximum 50 characters" maxlength="50" /><br /><br />
	    Book Name:&nbsp; &nbsp; <input type="text" name="product_name"  size="50" value="maximum 50 characters" maxlength="50" /><br /><br />
       Book Description:&nbsp; &nbsp; <input type="text" name="product_desc"  size="50" value="maximum 50 characters" maxlength="50" /><br /><br />
       Book image:&nbsp; &nbsp; <input type="text" name="product_image_name"  size="50" value="maximum 50 characters" maxlength="50" /><br /><br />
		
		Price :&nbsp; &nbsp; &nbsp; <input type="text" name="price" rows="3" cols="50"/><br /><br />
  
 
<?php
  $sql = "SELECT * FROM `category`";
$result = $conn->query($sql);

if ($result->num_rows > 0) { ?>
Category:<select name="category">
  <?php
    while($row = $result->fetch_assoc()) { ?>
  <option value='<?php echo $row["id"]?>'><?php echo $row["name"]?></option>
  <?php
    } ?>
  </select>
  <?php
} else {
    echo "0 results";
}
  ?>
   <br>    <br>
		<input type="submit" name="submit" value="submit"/>
</div>
