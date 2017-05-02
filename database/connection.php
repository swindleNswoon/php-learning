<?php

/**
 public function to connect to MySql database
 */
class Connection 
{
	public static function make($config)
	{
		try {	
			return new PDO($config['connection'] . ';dbname=' . $config['name'], 
				$config['username'], $config['password'], $config['options']
			);
		} catch (PDOException $e) {
		die($e->getMessage());
	}	
	}
}


?>