<?php

namespace Intranet;
use Intranet\Core\Config as Config;

class Controller
{
    public function model($model)
    {
        require_once APPLICATION_PATH . DS . 'models/' . $model . '.php';
        return new $model();
    }

    public function renderView($view, $params = null) {

        $utils = new \Intranet\Core\Utils();
        $session = new \Intranet\Core\Session();
        $session->getInstance();

        $debug = new \Intranet\Core\Debug();

        //Get literals
        $lang = (!empty($session->get('USER','lang')) ? $session->get('USER','lang') : 'es');
        $this->getLangFile($lang);

        //Check debug mode
        (Config::get('mvc_skeleton.env') != 'production' ? $session->set('DEBUG', 'active', 1) : $session->set('DEBUG', 'active', false));
        $debug->setDebugVar('view', APPLICATION_PATH . '/resources/views/' . $view . '.tpl.php');

        $data = $params;

        if (file_exists(APPLICATION_PATH . '/resources/views/' . $view . '.tpl.php')){

            ob_start();

            include APPLICATION_PATH . '/resources/views/' . $view . '.tpl.php';

            return ob_get_clean();

        }else{

            ob_start();

            include APPLICATION_PATH . '/resources/views/notFound.tpl.php';

            return ob_get_clean();
        }
    }

    public function getLangFile($lang =  null) {
        require_once APPLICATION_PATH . '/resources/languages/lang.' . $lang . '.php';
    }

}
