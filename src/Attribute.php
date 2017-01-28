<?php
/**
 * Created by PhpStorm.
 * User: Clayton
 * Date: 08/01/17
 * Time: 19:42
 */

namespace Solid\Html;


class Attributes
{
    private $attributes;
    public function __construct(array $attributes){
        $this->attributes = $attributes;
    }
}