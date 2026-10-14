<?php

require '_assets/includes/autoloader.php';

try {
    if (filter_input(INPUT_GET, 'action')) {
        if ($_GET['action'] === 'login') {
            (new \modules\controllers\LoginController())->execute();
        }

        else if ($_GET['action'] === 'signup') {
            (new \modules\controllers\SignupController())->execute();
        }

        else {
            throw new Exception('La page que vous recherchez n\'existe pas');
        }
    }
    else {
        (new \modules\controllers\HomepageController())->execute();
    }
} catch (Exception $e) {
    (new \modules\views\Error($e->getMessage()))->show();
}
?>