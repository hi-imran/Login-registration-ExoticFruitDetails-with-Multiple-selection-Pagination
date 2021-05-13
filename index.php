<html>
<body bgcolor = "#4793E3">

	<center>
	<h1>Login</h1>
<?php 
	if(isset($_GET['msg']))
		print "<span style = \"color: white; background:  #3789e1; padding: 4px;\">$_GET[msg]</span>";
	?>
<br><br>
	<form method="post" action = "verify.php">
	<table>
		<tr>
			<td>UserName(Email)</td>
			<td><input type="email" name="email" required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" required></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="image" src = "image/login.png" width="120"></td>
		</tr>
	</table>
	</form>

	
	<h4>New User?  <a href="register.php">Register</a></h4>

	</center>

</body>
</html>