<?php

/**
 * Created by PhpStorm.
 * User: Clayton
 * Date: 07/01/17
 * Time: 21:59
 */

namespace Solid\Html\Tag;

class A extends Tag
{

    public function validate(){
        if(!isset($this->attrs[0])){
            throw new \Exception("Attribute href not found");
        }

        if(!is_string($this->attrs[0])){
            throw new \Exception("Attribute href must be string");
        }

        if(!isset($this->attrs[1])){
            throw new \Exception("Attribute anchor text not found");
        }

        if(!is_string($this->attrs[1])){
            throw new \Exception("Attribute anchor text must be string");
        }

    }

    public function __toString() :string{
            return '<a href="' . $this->attrs[0] . '"' . $this->options_attrs . '>' . $this->attrs[1] . '</a>';
    }

}