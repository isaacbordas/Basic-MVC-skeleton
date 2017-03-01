<?php

// Define path to application directory
defined('APPLICATION_PATH')
        || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../app'));
defined('DS') || define('DS', DIRECTORY_SEPARATOR);

// Ensure app/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH),
    get_include_path(),
)));

// Bootstrap
require_once APPLICATION_PATH . '/Bootstrap.php';

$bootstrap = new Intranet\Bootstrap();
$bootstrap->run();

$app = new Intranet\App();