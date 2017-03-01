<?php

namespace Intranet\Core;

class Config {

    private static $config = null;

    public static function load() {
        $conf = parse_ini_file(APPLICATION_PATH . '/config/config.ini', true);
        self::$config = $conf['production'];
        foreach ($conf[$conf['production']['mvc_skeleton.env']] as $key => $value) {
            self::$config[$key] = $value;
        }
    }

    public static function get($var) {
        return !empty(self::$config[$var]) ? self::$config[$var] : null;
    }

    public static function items() {
        return self::$config;
    }

}
