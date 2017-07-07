<?php 
session_start();
?>



<!DOCTYPE html>
<html>
<head>
	<title>Chat Room</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<?php
	if(isset($_POST["button"]))
	 {

	if(empty($_POST["username"]))
	 {

	echo '<div class="error">Please Enter a Username</div>';
	}
	else
	{
	$_SESSION["user"]=$_POST["username"];
	header("location:room.php");
	exit;

	}
	}

?>

<form id="login-form" method="post" name="form1">
	<fieldset> 
		Username:<br>
  		<input type="text" name="username"><br>
<br>
  		<input type="submit" value="Login" name="button">
 	</fieldset>

</form>


</body>
</html>
