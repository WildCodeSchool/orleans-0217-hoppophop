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

    public function getPlacePlanning()
    {
        $planningManager = new PlanningManager();
        $place = $planningManager->getPlace();
        return $place;
    }
    public function render($twig)
    {
        $artist = $this->getArtistPlanning();
        $place = $this->getPlacePlanning();
        echo $twig->load('planning.html.twig')->render(['artistPlanning'=>$artist],'placePlanning'=>$place]);
    }
}