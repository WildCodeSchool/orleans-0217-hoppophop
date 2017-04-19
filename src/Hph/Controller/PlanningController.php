<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 07/04/17
 * Time: 16:20
 */

namespace Hph\Controller;

use Hph\Model\Artist;
use Hph\Model\ArtistRequest;
use Hph\Model\PlaceManager;
use Hph\Model\PlanningManager;
use Hph\Model\Concert;


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


    public function showPlanning()
    {
        //   $artistId = $this->getArtistId();
        //   $place = $this->getPlacePlanning();

        // recupération de tous les concerts
        $concerts = $this->getConcertPlanning();

        foreach ($concerts as $concert) {
            $date = new \DateTime($concert['concert_start']);
            $jour = $date->format('l');
                if ($jour == 'Friday') {
                    $jourfr = str_replace('Friday','VENDREDI',$jour);
                }
                else {
                    $jourfr= str_replace('Saturday','SAMEDI',$jour);
                }

            $heurestart = new \DateTime($concert['concert_start']);
            $heurestart->format('H:i');
            $heureend = new \DateTime($concert['concert_start']);
            $heureend->format('H:i');
            $heure = $heurestart->format('H:i') . '-' . $heureend->format('H:i');

            // recupération de l'artiste correspondant à $artistId
            $artistId = $concert['artist_id'];
            $artistRequest = new ArtistRequest();
            $artists = $artistRequest->findOne($artistId);
            $artist = $artists[0];
            // recupération du lieu correspondant à $placeId
            $placeId = $concert['place_id'];
            $placeManager = new PlaceManager();
            $place = $placeManager->findOne($placeId);
            $lieu = $place->getName();

            $prog[$jourfr][$lieu][$heure] = $artist;
        }
        return $this->twig->render('planning.html.twig', ['prog' => $prog,
        ]);

    }
}