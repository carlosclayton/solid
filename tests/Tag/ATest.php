<?php

namespace Solid\Html\Tag;

class ATest extends \PHPUnit_Framework_TestCase
{
    public function testCriarTagImgComHrefEAncora()
    {
        $a = new A('http://viusolucoes.com.br', 'Abrir site');
        $this->assertEquals('<a href="http://viusolucoes.com.br">Abrir site</a>', $a);
    }
}