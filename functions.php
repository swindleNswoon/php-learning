<?php

function dd ($data) {
	die(var_dump($data));
}

function ageChecker ($age) {
	if($age >= 21) {
		echo "Welcome";
	} else {
		echo "Go out and see the world, youngling";
	}

}

function connectToDb() {
	try {
		return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');	
	} catch (PDOException $e) {
		die($e->getMessage());
	}

}

function fetchAllTasks($pdo) {
	$statement = $pdo->prepare('select * from todos');
	$statement->execute();
	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

?>