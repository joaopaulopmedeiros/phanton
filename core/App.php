<?php 

namespace Phanton\Core;

class App 
{

    protected static $registry = [];

    public static function bind($key, $value) 
    {
        static::$registry[$key] = $value;
    }

    public static function get($key)
    {
        if(! array_key_exists($key, static::$registry)) {
            throw new \Exception("There is not a {$key} value");
        }

        return static::$registry[$key];
    }

}