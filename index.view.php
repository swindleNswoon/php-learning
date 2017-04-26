<!DOCTYPE html>
<html>
<head>
	<title>Learning PHP</title>
	<style>
		header {
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>
	<form action="index.php" method="get">
		<label>Please Enter Your Age:</label>
		<input type="text" name="age">
		<input type="submit">
	</form>
	<p><?= ageChecker($_GET["age"]); ?></p>
</body>
</html>