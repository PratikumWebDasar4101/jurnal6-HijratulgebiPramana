<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2 align="center">Login</h2>

<table border="0" align="center">
	<form action="list.php" method="POST">
	<tr>
		<th>Username</th>
		<td><input type="text" name="username" id="username"></td>
	</tr>
	<tr>
		<th>Password</th>
		<td><input type="password" name="password" id="password"></td>
	</tr>
	<tr>
		<td colspan="3"><input style="width: 50%;margin-left: 30%;margin-bottom: 10%;margin-top: 5%" type="submit" name="submit"></td>
	</tr>
</form> 
</table>
</body>
</html>

<?php  
session_start();
error_reporting(0);
$user = array(
				"username" => "pramana",
				"password" => "1234"
			);

if (isset($_POST['submit'])) {
	if ($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']){
		$_SESSION['username'] = $_POST['username'];
		header("Location: formawal.php");
	}else{
		echo "Username atau Password Tidak Benar";
	}
}
?>