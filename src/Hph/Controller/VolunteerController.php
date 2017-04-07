<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 07/04/17
 * Time: 17:03
 */

namespace Hph\Controller;


class VolunteerController
{
    public function render ($twig)
    {
        echo $twig->load('volunteer.html.twig')->render();
    }
}