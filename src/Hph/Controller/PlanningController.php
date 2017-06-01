<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 07/04/17
 * Time: 16:20
 */

namespace Hph\Controller;

use Hph\Model\Artist;
use Hph\Model\ArtistManager;
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
        $planningManager = new PlanningManager();

        // recupération de tous les concerts
        $concerts = $planningManager->getConcertsToShowWoShowCase();
        $showcases = $planningManager->getShowCases();

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
            $heureend = new \DateTime($concert['concert_end']);
            $heureend->format('H:i');
            $heure = $heurestart->format('H:i') . '-' . $heureend->format('H:i');

            // recupération de l'artiste correspondant à $artistId
            $artistId = $concert['artist_id'];
            $artistManager = new ArtistManager();
            $artists = $artistManager->findOneId($artistId);
            $artist = $artists;
            // recupération du lieu correspondant à $placeId
            $placeId = $concert['place_id'];
            $placeManager = new PlaceManager();
            $place = $placeManager->findOne($placeId);
            $lieu = $place->getName();

            $status = $concert['status'];

            $prog[$jourfr][$lieu][$heure]= array('artiste' => $artist,
                                                 'concert' => $concert);
        }

        $progShow = [];
        foreach ($showcases as $showcase) {
            $date = new \DateTime($showcase['concert_start']);

            $heurestart = new \DateTime($showcase['concert_start']);
            $heurestart->format('H:i');
            $heureend = new \DateTime($showcase['concert_end']);
            $heureend->format('H:i');
            $heure = $heurestart->format('H:i') . '-' . $heureend->format('H:i');

            // recupération de l'artiste correspondant à $artistId
            $artistId = $showcase['artist_id'];
            $artistManager = new ArtistManager();
            $artists = $artistManager->findOne($artistId);
            $artist = $artists;
            // recupération du lieu correspondant à $placeId
            $placeId = $showcase['place_id'];
            $placeManager = new PlaceManager();
            $place = $placeManager->findOne($placeId);
            $lieu = $place->getName();


            $progShow[$lieu][$heure] = array('artiste' => $artist,
                                             'showcase' => $showcase);
        }
        return $this->twig->render('planning.html.twig', [
            'prog' => $prog,
            'progShow' => $progShow,
        ]);

    }
}