<?php
/**
 * Created by PhpStorm.
 * User: Clayton
 * Date: 07/01/17
 * Time: 21:53
 */

namespace Solid\Html;


class AttributeTest extends \PHPUnit_Framework_TestCase
{
    public function testCriaAttributesDeHatmlParaTags(){
        $attributes = new Attribute([
            'class'=> 'btn btn_default',
            'data_model' => '#login',
            'id'=> 'login'
        ]);

        $this->assertEquals(' class="btn btn_default" data_model="#login" id="login', $attributes);
    }


}