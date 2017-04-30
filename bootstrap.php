<?php
require 'database/queryBuilder.php';
require 'database/connection.php';

return new queryBuilder(Connection::make());


?>