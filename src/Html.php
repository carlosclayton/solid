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
    public function call(string $name, array $arguments){
            return $this->createTags($name, $arguments);
    }

    protected function createTags(string $name, array $arguments)
    {
        $class = '\Solid\Html\Tag\\' . ucfirst($name);
        $reflection  = new \Reflection($class);
        return $reflection->newInstanceArgs($arguments);
    }

}