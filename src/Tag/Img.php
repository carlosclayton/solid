<?php

/**
 * Created by PhpStorm.
 * User: Clayton
 * Date: 07/01/17
 * Time: 21:59
 */

namespace Solid\Html\Tag;

class Img extends Tag
{

    public function validate(){
        if(!isset($this->attrs[0])){
            throw new \Exception("Attribute src not found");
        }

        if(!is_string($this->attrs[0])){
            throw new \Exception("Attribute src must be string");
        }
    }

    public function __toString() :string{
            return '<img src="' . $this->attrs[0] . '"' . $this->options_attrs . '>';
    }

}