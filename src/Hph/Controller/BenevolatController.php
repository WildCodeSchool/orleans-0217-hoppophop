<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 20:57
 */

namespace Hph\Controller;


class BenevolatController extends ControllerDefault
{
    public function render()
    {
        return $this->twig->render('benevolat.html.twig');
    }
}