<?php

namespace Solid\Html\Tag;

use Solid\Html\Attribute;

abstract class Tag implements TagContract {

    protected $attrs;
    protected $options_attrs;
    public function __construct(){
        $this->attrs = func_get_args();
        $this->validate();
    }

    public function attributes(Attribute $attribute){
        $this->options_attrs = $attribute;
    }
}