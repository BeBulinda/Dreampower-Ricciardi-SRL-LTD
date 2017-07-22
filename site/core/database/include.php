<?php
//Change host name, database type, database, username, password
require "Database.php";

Database::setUp(array(
	'dsn' => 'mysql:host=localhost;dbname=stannyshoes;',
	'username' => 'root',
	'password' => ''
    ));

                            