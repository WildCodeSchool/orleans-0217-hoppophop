<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 07/04/17
 * Time: 16:42
 */

namespace Hph\Controller;


class CashlessController extends ControllerDefault
{
    public function render()
    {
        return $this->twig->render('cashless.html.twig', ['partners'=>$partner]);
    }
}