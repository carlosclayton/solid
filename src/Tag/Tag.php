<?php

namespace Solid\Html\Tag;

use Solid\Html\Attribute;

abstract class Tag implements TagContract {

    protected $attrs;
    protected $options_attrs;
    public function __construct(){
        $this->attrs = func_get_args();

        foreach ( $this->attrs as &$value ) {
            if(is_a($value, 'Solid\Html\Tag\TagContract')){
                $value = (string)$value;
            }
        }

        $this->validate();
    }

    public function attributes($attribute){
        if(is_array($attribute)){
            $attribute = new Attribute($attribute);
        }
        if(!is_a($attribute, 'Solid\Html\Attribute')){
            throw new \Exception($attribute . ' must be a Solid\Html\Tag\Attribute instance');
        }
        $this->options_attrs = $attribute;
    }
}