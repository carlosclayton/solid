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
    public function testCriarTagImgComSrc(){
        $html = new Html;
        $img = $html->img('img/photo.img');
        $this->assertEquals('<img src="img/photo.img">', $img);
    }

    public function testCriarTagImgComAncora(){
        $html = new Html;
        $img = $html->img('img/photo.img');
        $a = $html->a('http://example.com', $img);
        $this->assertEquals('<a href="http://example.com"><img src="img/photo.img"></a>', $a);
    }

    public function testCriarTagImgComClasseId(){
        $html = new Html;
        $a = $html->a('http://example.com', 'Meu site');
        $a->attribute([
           'class' => 'btn btn-default'
        ]);
        $this->assertEquals('<a href="http://example.com" class="btn btn-default">Meu site</a>', $a);
    }

}