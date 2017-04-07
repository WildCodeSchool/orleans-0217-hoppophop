<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 07/04/17
 * Time: 16:48
 */

namespace Hph\Controller;


class TicketController
{
    public function render ($twig)
    {
        $template=$twig->load('ticket.html.twig');
        echo $template->render();
    }
}