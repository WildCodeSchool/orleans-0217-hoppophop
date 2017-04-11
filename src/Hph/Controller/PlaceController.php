<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 07/04/17
 * Time: 11:41
 */

namespace Hph\Controller;


class PlaceController
{
    public function render($twig)
    {
        echo $twig->load('place.html.twig')->render();
    }
}