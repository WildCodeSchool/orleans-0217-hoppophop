<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 07/04/17
 * Time: 11:41
 */

namespace HPH\controller;


class PlaceController
{
    public function render ($twig)
    {
        $template = $twig->load('place.html.twig');
        echo $template->render();
    }
}