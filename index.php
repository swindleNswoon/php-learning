<?php
require 'functions.php';

class Task 
{
	public $description;
	public $completed = false;
	
	public function __construct($description) {
		$this->description = $description;
	}
	public function complete() {
		$this->completed = true;
	}

	public function isComplete() {
		return $this->completed;
	}

	
}

$tasks = [
	new Task('Go to the store'),
	new Task('Walk Dogs'),
	new Task('Vacuumn'),
	new Task('Make Dinner')
];

$tasks[0]->complete();

//$task = new Task('Go to the store'); //create task

//$task->complete(); //complete task

//var_dump($task->isComplete());

//testing that git pull worked
	
require 'index.view.php';
?>