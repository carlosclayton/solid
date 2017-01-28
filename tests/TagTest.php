<?php
/**
 * Created by PhpStorm.
 * User: Clayton
 * Date: 07/01/17
 * Time: 21:53
 */

namespace Solid\Html;


class TagTest extends \PHPUnit_Framework_TestCase
{
    public function testCriarTagImgComSrc(){
        $html = new Tag;
        $img = $html->img('img/photo.img');
        $this->assertEquals('<img src="img/photo.img">', $img);
    }

    public function testCriarTagImgComAncora(){
        $tag = new Tag;
        $img = $tag->img('img/photo.img');
        $a = $tag->a('http://example.com', $img);
        $this->assertEquals('<a href="http://example.com"><img src="img/photo.img"></a>', $a);
    }

}