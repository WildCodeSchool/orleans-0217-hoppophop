<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 18:01
 */

namespace Hph\Controller;

use Hph\Model\PlaceManager;
use Hph\Model\ProgrammationManager;

class ProgrammationController extends ControllerDefault
{

    public function allArtist()
    {
        $artists = new ProgrammationManager();
        return $artists->allArtist();

    }
//    public function getArtists()
//    {
//        $artists = new ProgrammationManager();
//        return $artists->getArtists();
//    }
//
//    public function getArtistsPlace($idLieux)
//    {
//        $artist = new ProgrammationManager();
//        return $artist->getArtistsPlace($idLieux);
//    }
//
//    public function getArtistsSoir($jour)
//    {
//        $artist = new ProgrammationManager();
//        return $artist->getArtistsSoir($jour);
//    }
//
//    public function getArtistsLocal($local)
//    {
//        $artist = new ProgrammationManager();
//        return $artist->getArtistsLocal($local);
//    }

    public function listAllArtist()
    {
        $artists = $this->allArtist();
        $partner = $this->getPartner();
        return $this->twig->render('programmation.html.twig', ['artists' => $artists, 'error'=>$_GET['error'], 'partners'=>$partner]);
    }

    public function listArtist()
    {
        $placeManager = new PlaceManager();
        $places = $placeManager->listPlaces();

        $progManager = new ProgrammationManager();
        $artistes = $progManager->getArtistes($_GET);

        $partner = $this->getPartner();
        return $this->twig->render('programmation.html.twig', ['artists' => $artistes,
                                                                'places' => $places,
                                                                'partners'=>$partner,
                                                                'error'=>$_GET['error'],
                                                                'lieuSelected' => $_GET['lieux'] ?? '',
                                                                'soirSelected' => $_GET['day'] ?? '',
                                                                'localSelected' => $_GET['lcl'] ?? '',]);
    }
}
