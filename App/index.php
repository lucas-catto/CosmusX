<?php

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    // echo $url;

    include './Controllers/HomeController.php';

    switch ($url) {
        case '/CosmusX/App/':
            echo 'inicial';
            HomeController::index();
            break;
        
        default:
            echo 'not found';
            break;
    }
?>
