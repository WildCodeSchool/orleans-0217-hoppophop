<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 06/04/17
 * Time: 20:22
 */

namespace Hph\Controller;

class ArtistController
{
    public function render($twig)
    {
        $template = $twig->load('artiste.html.twig');
        echo $template->render();
    }
}