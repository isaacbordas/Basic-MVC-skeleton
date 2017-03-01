<?php

/**
 * Description of home
 *
 * @author Isaac
 */
class Login extends Intranet\Controller
{
    public function index()
    {
        $utils = new \Intranet\Core\Utils();
        $session = new Intranet\Core\Session();
        $session->getInstance();

        if (!empty($session->get('SESSION','token'))){
            $utils->redirectURL(array('url' => '/frontal'));
            die();
        }

        $html = $this->renderView('login/login', array('hide_menu' => true));
        echo $html;

    }

    public function checkLogin()
    {
        $params['data'] = $_POST;
        $utils = new \Intranet\Core\Utils();
        $errors = new \Intranet\Core\Errors();
        $session = new Intranet\Core\Session();
        $session->getInstance();
        $errors->unsetError(); //reset errors

        // Check login
        $user = $this->model('User');

        $user->set_variable('email', $params['data']['username']);
        $user->set_variable('password', $params['data']['password']);
        $params['data']['user'] = $user->checkUser();

        if(!empty($params['data']['user'])){
            // Valid user
            $session->set('SESSION', 'token', bin2hex(openssl_random_pseudo_bytes(20)));
            $session->set('USER', 'id_user', $params['data']['user']['id_user']);
            $session->set('USER', 'user_lang', $params['data']['user']['user_lang']);
            $session->set('USER', 'user_name', $params['data']['user']['user_name']);
            $utils->redirectURL(array('url' => '/frontal'));
        }else{
            $errors->setError('login', 1);
            $utils->redirectURL(array('url' => '/'));
        }

    }

    public function logout()
    {
        $utils = new \Intranet\Core\Utils();
        $session = new Intranet\Core\Session();
        $session->getInstance();
        $session->destroySession();

        $utils->redirectURL(array('url' => '/'));
        die();
    }

}