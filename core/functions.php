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


?>