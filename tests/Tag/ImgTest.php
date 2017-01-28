<?php

namespace Solid\Html\Tag;

use Solid\Html\Attribute;

class ImgTest extends \PHPUnit_Framework_TestCase
{
    public function testCriarTagImgComSrc()
    {
        $img = new Img('img/photo.img');
        $this->assertEquals('<img src="img/photo.img">', $img);
    }

    public function testCriarTagImgComSrcEAttributosAdicionais()
    {
        $attributes = new Attribute([
            'class' => 'img-responsive'
        ]);

        $img = new Img('img/photo.img');
        $img->attributes($attributes);

        $this->assertEquals('<img src="img/photo.img" class="img-responsive">', $img);
    }

}