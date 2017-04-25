<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 07/04/17
 * Time: 17:03
 */

namespace Hph\Controller;


class VolunteerController extends ControllerDefault
{
    public function render()
    {
        return $this->twig->render('volunteer.html.twig', ['partners'=>$partner]);
    }
}