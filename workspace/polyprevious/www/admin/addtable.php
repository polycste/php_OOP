         <h1>Table Information : </h1><br />
		 <form action="addtableaction.php" method="POST">
	    Table name:&nbsp; &nbsp; <input type="text" name="tablename"  size="50" value="maximum 50 characters" maxlength="50" /><br /><br />
		
		Description :&nbsp; &nbsp; &nbsp; <input type="text" name="description" rows="3" cols="50"/><br /><br/>
        
    <?php
require_once('connect.php');
 $sql = "SELECT * FROM `table_type`";
$result = $conn->query($sql);
if ($result->num_rows > 0) { ?>
<select name="tabletypename">
<?php
while($row = $result->fetch_assoc()) {
  ?>
<option value='<?php echo $row["table_type_id"]?>'
  <?php echo $row["tabletypename"]?>/>
<?php
}
  ?>
</select>
<?php
} else {
echo "0 results";
}

?>
	
	<br>	  
	
<input type="submit" name="submit" value="submit"/>
  </form>

