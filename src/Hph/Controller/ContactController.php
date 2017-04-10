<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 20:57
 */

namespace Hph\Controller;


class ContactController
{
    public function render ($twig)
    {
        $template = $twig->load('contact.html.twig');
        echo $template->render();
    }
}