<?php

namespace Intranet;
use Intranet\Core\Config as Config;
use Intranet\Core\Session as Session;

/**
 * Bootstrap Class
 *
 * This class is used start all application requests
 *
 */
class Bootstrap {

    public function __construct() {
        ;
    }

    public function run() {
        // Autoloading classes
        include_once 'Loader.php';

        // Set timezone
        date_default_timezone_set('Europe/Madrid');

        // Start configuration file
        Config::load();

        $session = Session::getInstance();
        if (Config::get('mvc_skeleton.env') != 'production') {
            error_reporting(E_ALL | E_STRICT);
            ini_set("display_errors", 1);
        }

        include_once APPLICATION_PATH . DS . 'App.php';

    }
}
