<?php

require_once __DIR__ . '/Router.php';
require_once __DIR__ . '/Controller.php';  // 👈 correct relative path
require_once __DIR__ . '/../models/Model.php';
require_once __DIR__ . '/../controllers/MainController.php';
require_once __DIR__ . '/../controllers/AlbumController.php';
require_once __DIR__ . '/../controllers/UserController.php';
require_once __DIR__ . '/../models/User.php';



//set up env variables
$env = parse_ini_file('../.env');

define('DBNAME', $env['DB_NAME']);
define('DBHOST', $env['DB_HOST']);
define('DBUSER', $env['DB_USER']);
define('DBPASS', $env['DB_PASS']);
