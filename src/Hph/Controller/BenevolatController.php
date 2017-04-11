<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 20:57
 */

namespace Hph\Controller;


class BenevolatController
{
    public function render($twig)
    {
        $template = $twig->load('benevolat.html.twig');
        echo $template->render();
    }
}