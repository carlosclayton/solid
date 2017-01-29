<?php

namespace Solid\Html\Tag;
use Solid\Html\Attribute;

class ATest extends \PHPUnit_Framework_TestCase
{
    public function testCriarTagImgComHrefEAncora()
    {
        $a = new A(new Attribute, 'http://viusolucoes.com.br', 'Abrir site');
        $this->assertEquals('<a href="http://viusolucoes.com.br">Abrir site</a>', $a);
    }

    public function testCriarTagImgComHrefEAncoraEAtributosAdicionais()
    {
        $attribute  = [
           'class' => 'btn btn-default',
            'data-modal' => '#login',
            'id' => 'login'
        ];

        $a = new A(new Attribute, '#', 'login');
        $a->attributes($attribute);

        $this->assertEquals('<a href="#" class="btn btn-default" data-modal="#login" id="login">login</a>', $a);
    }

}