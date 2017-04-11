<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 07/04/17
 * Time: 16:20
 */

namespace hph\controller;

use Hph\Model\Artist;
use Hph\Model\PlanningManager;


class PlanningController
{
    public function getArtistPlanning()
    {
        $planningManager = new PlanningManager();
        $artist = $planningManager->getArtist();
        return $artist;
    }

    public function render($twig)
    {
        $artist = $this->getArtistPlanning();
        echo $twig->load('planning.html.twig')->render(['artistPlanning'=>$artist]);
    }
}