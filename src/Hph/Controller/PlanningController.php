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


class PlanningController extends ControllerDefault
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
    public function getConcertPlanning()
    {
        $planningManager = new PlanningManager();
        $concerts = $planningManager->getConcert();
        return $concerts;
    }

    public function render($twig)
    {
        $artist = $this->getArtistPlanning();
        $place = $this->getPlacePlanning();
        $concerts = $this->getConcertPlanning();
        foreach ($concerts as $concert) {
           $jour = $concert->getConcertStart()->format('l');
           $heure = ;
           $artistId = ;
           $artist = ;
           $place = ;

           $planning[$jour][$place][$heure] = $artist;

        }





        var_dump($planning);
        echo $twig->load('planning.html.twig')->render(['planning'=>$planning,
                                                        'place'=>$place,
                                                        'concert'=>$concert
        ]);

    }
}