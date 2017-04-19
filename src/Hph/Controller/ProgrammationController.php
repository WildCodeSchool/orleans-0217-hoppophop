<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 18:01
 */

namespace Hph\Controller;
use Hph\Model\ProgrammationManager;

class ProgrammationController extends ControllerDefault
{

    public function getArtists()
    {
        $artists = new ProgrammationManager();
        return $artists -> getArtists();
    }

    public function render()
    {
        $artists = $this->getArtists();
//        echo $twig->load('programmation.html.twig')->render(['artistes'=>$artists]);
        return $this->twig->render('programmation.html.twig', ['artistes'=>$artists]);
    }
}
