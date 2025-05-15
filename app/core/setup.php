<?php

require_once __DIR__ . '/Router.php';
require_once __DIR__ . '/Controller.php';  // 👈 correct relative path
require_once __DIR__ . '/../models/Model.php';
require_once __DIR__ . '/../controllers/MainController.php';
require_once __DIR__ . '/../controllers/AlbumController.php';
require_once __DIR__ . '/../controllers/UserController.php';
require_once __DIR__ . '/../models/User.php';



define('DBHOST', 'crossover.proxy.rlwy.net');
define('DBNAME', 'railway');
define('DBUSER', 'root');
define('DBPASS', 'your_real_password'); // paste from Railway

