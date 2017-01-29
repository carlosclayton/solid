<?php

/**
 * Created by PhpStorm.
 * User: Clayton
 * Date: 07/01/17
 * Time: 21:59
 */

namespace Solid\Html;


class Html
{
    public function __call(string $name, array $arguments){
            return $this->createTags($name, $arguments);
    }

    public static function __callStatic(string $name,array $arguments){
        return self::createTags($name, $arguments);
    }
    protected static function createTags(string $name, array $arguments)
    {
        $class = '\Solid\Html\Tag\\' . ucfirst($name);

        $attributes = new Attribute;

        array_unshift($arguments, new Attribute());

        $reflection  = new \ReflectionClass($class);
        return $reflection->newInstanceArgs($arguments);
    }

}