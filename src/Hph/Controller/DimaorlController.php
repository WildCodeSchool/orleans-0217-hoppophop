<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 21:05
 */

namespace Hph\Controller;


class DimaorlController
{
    public function render ($twig)
    {
        $template = $twig->load('dimaorl.html.twig');
        echo $template->render();
    }
}