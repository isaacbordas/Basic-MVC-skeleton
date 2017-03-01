<?php

namespace Intranet\Core;

/**
 * Class for controlling all in the session
 *
 * Globals:
 * echo $session->var;
 * $session->var = value;
 *
 * User:
 * echo $session->user->var;
 * $session->user->var = value;
 */

class Session {

    private static $_instance;

    public function __construct() {
        if(empty($this->Id())){
            session_start();
        }
    }

    /**
     * Returns the unique instance of the session
     * @return Session
     */
    public static function getInstance() {
        if (!isset(self::$_instance))
            self::$_instance = new Session();
        return self::$_instance;
    }

    public function Id() {
        return session_id();
    }

    public function set($key, $var, $value) {
        $_SESSION[$key][$var] = $value;
    }

    public function del($key, $var) {
        if(empty($var)){
            unset($_SESSION[$key]);
        }else{
            unset($_SESSION[$key][$var]);
        }
    }

    public function get($key, $var = null) {
        if(empty($_SESSION) || empty($_SESSION[$key])){
            return false;
        }else{
            if (empty($var)) {
                return $_SESSION[$key];
            } else{
                return $_SESSION[$key][$var];
            }
        }
    }

    public function destroySession() {
        session_unset();     // unset $_SESSION variable for the run-time
        session_destroy();   // destroy session data in storage
    }

}
