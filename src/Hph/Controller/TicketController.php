<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 07/04/17
 * Time: 16:48
 */

namespace Hph\Controller;


class TicketController extends ControllerDefault
{
    public function render()
    {
        return $this->twig->render('ticket.html.twig', ['partners'=>$partner]);
    }
}