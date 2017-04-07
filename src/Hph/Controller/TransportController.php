<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 07/04/17
 * Time: 16:20
 */

namespace Hph\Controller;


class TransportController
{
    public function render ($twig)
    {
        $template = $twig->load('transport.html.twig');
        echo $template->render();
    }
}