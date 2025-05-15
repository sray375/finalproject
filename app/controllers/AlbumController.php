<?php

namespace app\controllers;

use app\core\Controller;

class AlbumController extends Controller {
    public function show($albumSlug) {
        // Convert slug like 'born-to-die' into a view path
        $viewPath = 'albums/' . $albumSlug;

        // Load the matching album view (e.g., albums/born-to-die.php)
        $this->returnView('./assets/views/' . $viewPath . '.php');

    }
}


