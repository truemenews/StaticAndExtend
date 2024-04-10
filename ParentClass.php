<?php

class ParentClass
{
    private static $instance;

    private function ini()
    {
        return self::$instance;
    }

    public static function __callStatic($method, $args)
    {
        self::$instance = (@$args[0] && $args[0] === 'singleton' && self::$instance)
                            ? self::$instance : new static;

        return self::$instance->$method(...$args);
    }
}