<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 07/04/17
 * Time: 16:42
 */

namespace Hph\Controller;


class CashlessController
{
    public function render($twig)
    {
        $template=$twig->load('cashless.html.twig');
        echo $template->render();
    }
}