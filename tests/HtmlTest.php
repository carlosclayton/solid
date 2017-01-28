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

    public function testCriarTagImgComClasseId(){
        $html = new Html;
        $a = $html->a('http://example.com', 'Meu site');
        $this->assertEquals('<a href="http://example.com">Meu site</a>', $a);
    }

}