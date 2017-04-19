<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 20:57
 */

namespace Hph\Controller;


class ContactController extends ControllerDefault
{
    public function mail($post)
    {

    }
    public function render()
    {
        return $this->twig->render('contact.html.twig');
    }
}