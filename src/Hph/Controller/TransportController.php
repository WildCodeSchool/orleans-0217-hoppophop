<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 07/04/17
 * Time: 16:20
 */

namespace Hph\Controller;


class TransportController extends ControllerDefault
{
    public function render()
    {
        return $this->twig->render('transport.html.twig', ['partners'=>$partner]);
    }
}