<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 18:01
 */

namespace Hph\Controller;
use Hph\Model\ProgrammationManager;

class ProgrammationController
{

    public function getArtistes()
    {
        $artists = new ProgrammationManager();
        return $artists->getArtistes(100);
    }

    public function render($twig)
    {
        $artists = $this->getArtistes();
        echo $twig->load('programmation.html.twig')->render(['artistes'=>$artists]);
    }
}