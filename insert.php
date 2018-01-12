<html>
<head>
	<title>PHP</title>
</head>
<body>
	Form Validation<br><br>
	<form name="form" method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
		ID: <input type="text" name="id1"><br><br>
		Name:<input type="text" name="name1"><br><br>
		Mark:<input type="text" name="mark1"><br><br>
		<input type="submit" name="submit" value="Insert" formaction=insert1.php>
		<input type="submit" name="submit" value="Update" formaction=update1.php>
		<input type="submit" name="submit" value="Delete" formaction=delete1.php>
	</form>
</body>
</html>