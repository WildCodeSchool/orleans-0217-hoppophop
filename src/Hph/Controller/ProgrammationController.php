<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 18:01
 */

namespace Hph\Controller;


class ProgrammationController extends ControllerDefault
{
    public function render ($twig)
    {
        $template = $twig->load('programmation.html.twig');
        echo $template->render();
    }
}