<?php

/**
 * Created by PhpStorm.
 * User: Clayton
 * Date: 07/01/17
 * Time: 21:59
 */

namespace Solid\Html;

class Html
{
    public function img($src)
    {
        return '<img src="' . $src . '">';
    }

    public function a($href, $anchor)
    {
                return '<a href="' . $href . '">' . $anchor . '</a>';

    }


}