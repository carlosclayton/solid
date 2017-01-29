<?php
/**
 * Created by PhpStorm.
 * User: Clayton
 * Date: 29/01/17
 * Time: 12:59
 */

namespace Solid\Html;


interface AttributeContract
{
    public function setAttributes(array $attributes);
    public function __toString() :string;
}