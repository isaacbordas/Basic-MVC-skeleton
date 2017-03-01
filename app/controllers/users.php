<?php

/**
 * Description of users
 *
 * @author Isaac
 */
class users extends \Intranet\Controller
{
    function __construct()
    {
        $utils = new \Intranet\Core\Utils();
        $utils->redirectIfNoValidToken();
    }

    public function index()
    {
        $utils = new \Intranet\Core\Utils();
        $utils->redirectURL(array('url' => '/frontal'));
    }

    public function createUser()
    {
        $users = $this->model('User');

        $data = array();
        $data['selects']['roles'] = $users->getRoles();

        $html = $this->renderView('user/create', $data);

        echo $html;
    }

    public function saveUser()
    {
        $utils = new \Intranet\Core\Utils();
        $session = new Intranet\Core\Session();
        $session->getInstance();

        $param = $_POST;
        $param['cryp_password'] = $utils->hashPassword($param['password']);

        $users = $this->model('User');
        $result = $users->saveUser($param);

        if($result !== false){
            $session->set('MESSAGES', 'class', 'success');
            $session->set('MESSAGES', 'result', 'successUserCreate');
            $utils->redirectURL(array('url' => '/frontal'));
            die();
        }else{
            $session->set('MESSAGES', 'class', 'error');
            $session->set('MESSAGES', 'result', 'failUserCreate');
            $utils->redirectURL(array('url' => '/users/createUser'));
            die();
        }
    }

}