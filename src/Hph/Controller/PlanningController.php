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


        $count=count($planning);
        $countplace=count($place);
        $countartist=count($artist);
            for ($i=0; $i<$count; $i++) {
                if (strpos($planning[$i]['concert_start'], '2017-09-15')===FALSE) {
                    $planning[$i]['day'] = 'SAMEDI';
                } else {
                    $planning[$i]['day'] = 'VENDREDI';
                }
            }
            for ($j=0; $j<$count; $j++) {
                for ($k=0; $k<$countplace;$k++){
                    if ($planning[$j]['place_id'] == $place[$k]['id']) {
                        $planning[$j]['place_name'] = $place[$k]['name'];
                    }
                }
            }
            for ($l=0; $l<$count;$l++){
                for ($m=0;$m<$countartist;$m++) {
                    if ($planning[$l]['artist_id'] == $artist[$m]['id']) {
                        $planning[$l]['artist_name'] = $artist[$m]['name'];
                    }
                }
            }


        var_dump($planning);
        echo $twig->load('planning.html.twig')->render(['planning'=>$planning,
                                                        'place'=>$place,
                                                        'concert'=>$concert
        ]);
    }
}