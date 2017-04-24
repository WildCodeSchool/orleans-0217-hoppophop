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
    public function getArtists()
    {
        $artists = new ProgrammationManager();
        return $artists->getArtists();
    }

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

    public function listAllArtist()
    {
        $artists = $this->allArtist();
        if(isset($_GET['error'])){
            $error = $_GET['error'];
        }else{
            $error = 1;
        }
        return $this->twig->render('programmation.html.twig', ['artists' => $artists, 'error'=>$error]);
    }

    public function listArtist()
    {
        $placeManager = new PlaceManager();
        $places = $placeManager->listPlaces();

        if (isset($_GET['place_id'])) {
            $idLieux = $_GET['place_id'];
            $artists = $this->getArtistsPlace($idLieux);
        } elseif (isset($_GET["day"])) {
            $jour = $_GET['day'];
            $artists = $this->getArtistsSoir($jour);
        } elseif (isset($_GET['lcl'])) {
            $local = $_GET['lcl'];
            $artists = $this->getArtistsLocal($local);
        } else {
            $artists = $this->getArtists();
        }
        return $this->twig->render('programmation.html.twig', ['artists' => $artists, 'places' => $places]);
    }
}
