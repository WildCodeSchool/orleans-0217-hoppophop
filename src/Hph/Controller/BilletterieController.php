<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 21:14
 */

namespace Hph\Controller;


class BilletterieController
{
    public function render ($twig)
    {
        $template = $twig->load('billetterie.html.twig');
        echo $template->render();
    }
}