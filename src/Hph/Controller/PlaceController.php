<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 07/04/17
 * Time: 11:41
 */

namespace Hph\Controller;
use Hph\Model\PlaceManager;

class PlaceController extends ControllerDefault
{
    public function getPlaces($showcase)
    {
        $places = new PlaceManager();
        return $places -> getPlaces($showcase);
    }
    public function render()
    {
        $places = $this->getPlaces(0);
        $showcase = $this->getPlaces(1);
        return $this->twig->render('place.html.twig', ['places'=>$places, 'showcases'=>$showcase]);
    }
    public function renderAdmin()
    {
        return $this->twig->render('place.html.twig');
    }
}