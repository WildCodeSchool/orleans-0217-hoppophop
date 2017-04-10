<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 18:01
 */

namespace Hph\Controller;


class ProgrammationController
{
    public function render ($twig)
    {
        $template = $twig->load('programmation.html.twig');
        echo $template->render();
    }
}