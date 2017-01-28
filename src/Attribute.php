<?php
/**
 * Created by PhpStorm.
 * User: Clayton
 * Date: 08/01/17
 * Time: 19:42
 */

namespace Solid\Html;


class Attribute
{
    private $attributes;

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public function __toString()
    {
        $result = [];
        foreach ($this->attributes as $key => $value){
        $result[] = $key . '="' . $value . '"';
    }
        return  ' ' . implode(' ', $result);
    }
}