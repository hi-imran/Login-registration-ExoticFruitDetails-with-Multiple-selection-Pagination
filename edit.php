<?php
include "connection.php";
include "login_check.php";

if(isset($_GET['edit_id']))
{

	$sql = "SELECT * FROM `wgt` WHERE `id` = '$_GET[edit_id]'";
	$res = $db->query($sql);
	$row = $res->fetch_array();	
}
?>
<html>
<center>
<body bgcolor = "#4793E3">
	
	<form method = "post" action = "upload.php" ectype='multipart/form-data'>
		<input type = hidden name = "id" value = "<?=$row['id']?>">
		<h1>Update Information</h1>
		<table>
			<tr>
				<td>Product Name</td>
				<td><input type = "text" name = "pname" required value = "<?=$row['pname']?>" ></td>
			</tr>
			<tr>
				<td>Product Image</td>
				<td><input type="file" name = "myfile">
                    <br>
                        Leave blank if you do not want to change the existing picture shown here.
                     <img src = "<?php print $row['image'];?>" width = 50 align = left>
                </td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type = "number" name = "price" value = "<?=$row['price']?>"></td>
			</tr>
			<tr>
				<td>Title</td>
				<td><input type = "text" name = "title" value = "<?=$row['title']?>"></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><textarea  name = "desc"><?=$row['desc']?></textarea></td>
			</tr>

			<tr>
				<td><input type = "submit" value = "Update" name = "submit"></td>
				<td ><button><a href="show2.php">View Product</a></button></td>

			</tr>
		</table>
	</form>

</body>
</center>
</html>