<?php

require_once __DIR__ . '/Router.php';
require_once __DIR__ . '/Controller.php';  // 👈 correct relative path
require_once __DIR__ . '/../models/Model.php';
require_once __DIR__ . '/../controllers/MainController.php';
require_once __DIR__ . '/../controllers/AlbumController.php';
require_once __DIR__ . '/../controllers/UserController.php';
require_once __DIR__ . '/../models/User.php';



define('DBNAME', 'your_database_name');
define('DBHOST', 'your_database_host');  // usually 'localhost' or '127.0.0.1'
define('DBUSER', 'your_database_user');
define('DBPASS', 'your_database_password');

