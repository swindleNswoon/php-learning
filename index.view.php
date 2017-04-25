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
	<h1>Task for the Day</h1>
	<ul>
		<?php foreach($task as $heading => $value) : ?>
	    <li><strong><?= ucwords($heading); ?></strong> <?= $value; ?></li>
	    <?php endforeach; ?>
	</ul>
</body>
</html>