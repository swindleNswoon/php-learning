<!DOCTYPE html>
<html>
<head>
	<title>Learning PHP</title>
	<link rel="stylesheet" type="text/css" href="views/public/css/styles.css">
</head>
<body>
	<?php require('partials/nav.php'); ?>
		<?php foreach ($users as $user): ?>
			<li><?= $user->name; ?></li>
		<?php endforeach; ?>
		<h1>Submit Your Name</h1>

		<form method="POST" action="/names">
			<input type="" name="name">
			<button type="submit">Submit</button>

		</form>
	</ul>
</body>
</html>