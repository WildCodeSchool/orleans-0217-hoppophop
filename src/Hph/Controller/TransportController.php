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
        echo $twig->load('transport.html.twig')->render();
    }
}