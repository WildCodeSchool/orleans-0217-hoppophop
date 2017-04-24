<?php

namespace Hph\Controller;

use Hph\Model\ConcertManager;
use Hph\Model\PlaceManager;
use Hph\Model\ProgrammationManager;

class ConcertController extends ControllerDefault
{
    public function allArtist()
    {
        $artists = new ProgrammationManager();
        return $artists->allArtist();
    }

    public function getConcerts()
    {
        $concerts = new ConcertManager();
        return $concerts->getConcerts();
    }

    public function getPlaces()
    {
        $places = new PlaceManager();
        return $places->getPlaces();
    }

    public function listConcert()
    {
        $artists = $this->allArtist();
        $concerts = $this->getConcerts();
        $places = $this->getPlaces();
        if(isset($_GET['error'])){
            $error = $_GET['error'];
        }else{
            $error = 1;
        }
        return $this->twig->render('concert.html.twig', ['artists'=>$artists, 'places'=>$places, 'concerts'=>$concerts, 'error'=>$error]);
    }
}