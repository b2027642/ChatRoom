<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Chat Room</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>


	<script type="text/javascript">
		

		$(document).ready(function(e){
				$("#buttonSend").click(function(){

					var message = $("#textarea").val();
					$.post("check-send.php",{msg:message, send:true});
					return false;
				});
		});
	</script>
<body>

	<div id="all">
	<div id="title">Welcome to my Chat room:<?php echo $_SESSION["user"] ?> </div>
	<div id="content"></div>
	</div>


	<br>

<form id="chat-form" method="post" name="form2">
	<fieldset> 

  		<textarea rows="5" type="text" id="textarea" name="textarea" placeholder="write here......." cols="50"></textarea>
  		<br>
		<br>
  		<input id="buttonSend" type="submit" value="Send" name="buttonSend">
 	</fieldset>

</form>

</body>
</html>