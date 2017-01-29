<?php

namespace Solid\Html\Tag;

use Solid\Html\Attribute;
use Solid\Html\AttributeContract;

abstract class Tag implements TagContract {

    protected $attrs;
    protected $options_attrs;
    protected $attributeClass;

    public function __construct(AttributeContract $attributes){
        $this->attrs = func_get_args();

        foreach ( $this->attrs as $key => &$value ) {
            if(is_a($value, 'Solid\Html\Tag\TagContract')){
                $value = (string)$value;
            }

            if(is_a($value, 'Solid\Html\AttributeContract')){
                $this->attributeClass = $attributes;
                unset($this->attrs[$key]);
            }
        }
        $this->attrs = array_values($this->attrs);
        $this->validate();

    }

    public function attributes(array $attributes){
        $this->attributeClass->setAttributes($attributes);
        $this->options_attrs = (string)$this->attributeClass;
    }
}