<?php

namespace Intranet\Core;

/**
 * Description of Debug
 *
 * @author Isaac
 */
class Debug
{
    public function setDebugVar($var, $value)
    {
        $session = new Session();
        $session->getInstance();
        $session->set('DEBUG', $var, $value);
    }

    public function unsetDebugVar($type = null)
    {
        $session = new Session();
        $session->getInstance();
        if(empty($type)){
            $session->del('DEBUG');
        }else{
            $session->del('DEBUG', $type);
        }
    }

    public function printDebugVar($var)
    {
        print "<pre>";
        print_r($var);
        print "</pre>";
    }
}