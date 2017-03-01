<?php

namespace Intranet\Core;

/**
 * Description of Errors
 *
 * @author Isaac
 */
class Errors
{
    public function setError($type, $error)
    {
        $session = new Session();
        $session->getInstance();
        $session->set('ERROR', $type, $error);
    }

    public function unsetError($type = null)
    {
        $session = new Session();
        $session->getInstance();
        if(empty($type)){
            $session->del('ERROR');
        }else{
            $session->del('ERROR', $type);
        }
    }
}