<?php
session_start();
?>
<html>
<body bgcolor = "#4793E3">

	<center>

	<h1>New User Register</h1>

	<script type="text/javascript">
		function same() {
			var p1 = document.f1.password.value;
			var p2 = document.f1.confirm_password.value;

			if(p1.length<5) {
				alert('Password is too small');
				document.f1.password.focus();
				return false;
			}

			if(p1!=p2) {
				alert('Password and Confirm Password does not match');
				document.f1.confirm_password.focus();
				return false;
			}
		return true;
		}
	</script>
	
	<?php
	if(isset($_GET['msg']) && $_GET['msg'] == "1") {
		print "<span style = \"color: white; background:  #3789e1; padding: 4px;\">This email is already taken. Please use another or login with your password.</span>";
	
	}
	?>
<br><br>
	<form method="post" name = f1 action = "register_thanks.php" onsubmit="return same();">
	<table>
		<tr>
			<td>FullName</td>
			<td><input type="text" name="fullname" required value="<?php
			 if(isset($_SESSION['save_data']) )
			 	print $_SESSION['save_data']['fullname'];
			 	?>"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" required value="<?php
			 if(isset($_SESSION['save_data']) )
			 	print $_SESSION['save_data']['email'];

			 unset($_SESSION['save_data']);
			 ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" required></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="password" name="confirm_password" required></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value = "Register"></td>
		</tr>
	</table>
	</form>

	<h4>Existing User?  <a href="index.php">Login</a></h4>
	</center>

</body>
</html>