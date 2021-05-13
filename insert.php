<?php include "login_check.php"; ?>

<html>
<center>
<body bgcolor = "#4793E3">
	<h1>Insert Product</h1>
	<form  method = "post" action = "upload.php" enctype = "multipart/form-data">
		<table>
			<tr>
				<td>Product Name</td>
				<td><input type = "text" name = "pname" required></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type = "file" name = "myfile"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type = "number" name = "price"></td>
			</tr>
			<tr>
				<td>Title</td>
				<td><input type = "text" name = "title"></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><textarea  name = "desc"></textarea></td>
			</tr>
			<tr>
				<td><input type = "submit" value = "Insert"></td>
				<td><button><a href="show2.php">View Product</a></button></td>

			</tr>
		</table>
	</form>

</body>
</center>
</html>