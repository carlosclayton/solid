<?php

namespace Solid\Html\Tag;

class ImgTest extends \PHPUnit_Framework_TestCase
{
    public function testCriarTagImgComSrc()
    {
        $img = new Img('img/photo.img');
        $this->assertEquals('<img src="img/photo.img">', $img);
    }
}