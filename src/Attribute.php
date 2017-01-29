<?php
/**
 * Created by PhpStorm.
 * User: Clayton
 * Date: 08/01/17
 * Time: 19:42
 */

namespace Solid\Html;


class Attribute implements AttributeContract
{
    private $attributes = [];

    public function __construct(array $attributes = null)
    {
        if($attributes) {
            $this->attributes = $attributes;
        }
    }

    public function setAttributes(array $attributes){

            $this->attributes = $attributes;

    }

    public function __toString() :string
    {
        $result = [];
        foreach ($this->attributes as $key => $value){
        $result[] = $key . '="' . $value . '"';
    }
        return  ' ' . implode(' ', $result);
    }
}