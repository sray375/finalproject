<?php

//require our files, remember should be relative to index.php
require '../app/core/Router.php';
require '../app/models/Model.php';
require '../app/controllers/Controller.php';
require '../app/controllers/MainController.php';
require '../app/controllers/UserController.php';
require '../app/models/User.php';


//set up env variables
$env = parse_ini_file('../.env');

define('DBNAME', $env['DB_NAME']);
define('DBHOST', $env['DB_HOST']);
define('DBUSER', $env['DB_USER']);
define('DBPASS', $env['DB_PASS']);
