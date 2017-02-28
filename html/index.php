<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
<input type="text" name="email" /><br />
<input type="submit" name="btn" />
</form>
<?php
	if(isset($_POST['btn']))
	{
		$email=$_POST['email'];
		$send=mail($email,"test","hello");
		if(!$send)
		{
			echo "mail not sent";
		}
	}
?>
</body>
</html>
