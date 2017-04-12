<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 07/04/17
 * Time: 11:41
 */

namespace Hph\Controller;
use Hph\Model\PlaceManager;

class PlaceController
{
    public function getPlaces()
    {
        $places = new PlaceManager();
        return $places -> getPlaces();
    }
    public function render($twig)
    {
        $places = $this->getPlaces();
        echo $twig->load('place.html.twig')->render(['places'=>$places]);
    }
}