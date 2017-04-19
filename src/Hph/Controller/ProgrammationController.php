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

    public function getArtists()
    {
        $artists = new ProgrammationManager();
        return $artists->getArtists();
    }

<<<<<<< HEAD
    public function render()
=======
    public function getArtistsPlace($idLieux)
    {
        $artist = new ProgrammationManager();
        return $artist->getArtistsPlace($idLieux);
    }

    public function getArtistsSoir($jour)
    {
        $artist = new ProgrammationManager();
        return $artist->getArtistsSoir($jour);
    }

    public function getArtistsLocal($local)
    {
        $artist = new ProgrammationManager();
        return $artist->getArtistsLocal($local);
    }

    public function listArtist()
>>>>>>> 3f9de7bb2ffb66e4c42c49a29b782a9fb6797e7e
    {
        $placeManager = new PlaceManager();
        $places = $placeManager->listPlaces();

        if (isset($_GET['place_id'])) {
            $idLieux = $_GET['place_id'];
            $artists = $this->getArtistsPlace($idLieux);
        } elseif (isset($_GET["day"])) {
            $jour = $_GET['day'];
            $artists = $this->getArtistsSoir($jour);
        } elseif (isset($_GET['soir'])) {
            $local = $_GET['soir'];
            $artists = $this->getArtistsLocal($local);
        } else {
            $artists = $this->getArtists();
        }

        return $this->twig->render('programmation.html.twig', ['artistes' => $artists, 'places' => $places]);
    }
}
