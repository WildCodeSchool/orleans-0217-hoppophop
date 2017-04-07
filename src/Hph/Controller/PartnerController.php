<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 20:21
 */

namespace Hph\Controller;


class PartnerController
{
    public function render($twig)
    {
        $template = $twig->load('partner.html.twig');
        echo $template->render();
    }
}