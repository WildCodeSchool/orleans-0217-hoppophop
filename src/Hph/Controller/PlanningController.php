<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 07/04/17
 * Time: 16:20
 */

namespace hph\controller;

use Hph\Model\Artist;
use Hph\Model\ArtistRequest;
use Hph\Model\PlanningManager;


class PlanningController extends ControllerDefault
{

    public function getArtistId()
    {
        $planningManager = new PlanningManager();
        $artistId = $planningManager->getArtistId();
        return $artistId;
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
        $artistId = $this->getArtistId();
        $place = $this->getPlacePlanning();
        $concerts = $this->getConcertPlanning();
        foreach ($concerts as $concert) {
           $jour = $concert->getConcertStart()->format('l');
           $heure = $concert->getConcertStart()->format('H:i') .'-'. $concert->getConcertEnd()->format('H:i');

           $bandId = $artistId->getId();
           $artistRequest = new ArtistRequest();
           $band = $artistRequest -> findone($bandId);
           $place = ;

           $planning[$jour][$place][$heure] = $band;

        }





        var_dump($planning);
        echo $twig->load('planning.html.twig')->render(['planning'=>$planning,
                                                        'place'=>$place,
                                                        'concert'=>$concert
        ]);

    }
}