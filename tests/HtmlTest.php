<?php
/**
 * Created by PhpStorm.
 * User: Clayton
 * Date: 07/01/17
 * Time: 21:53
 */

namespace Solid\Html;


class HtmlTest extends \PHPUnit_Framework_TestCase
{

    public function testCriarTagImgComSrc(){
        $html = new Html;
        $img = $html->img('img/photo.jpg');
        $this->assertEquals('<img src="img/photo.jpg">', $img);
    }

    public function testCriarTagImgComSrcAncora(){
        $html = new Html;
        $img = $html->img('img/photo.jpg');
        $a = $html->a('http://example.com', $img);
        $this->assertEquals('<a href="http://example.com"><img src="img/photo.jpg"></a>', $a);
    }

    public function testCriarTagImgComClasseId(){
        $html = new Html;
        $a = $html->a('http://example.com', 'Meu site');
        $a->attributes([
            'class' => 'btn btn-default'
        ]);
        $this->assertEquals('<a href="http://example.com" class="btn btn-default">Meu site</a>', $a);
    }
}