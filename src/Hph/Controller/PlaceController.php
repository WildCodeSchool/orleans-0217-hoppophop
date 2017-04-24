<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 07/04/17
 * Time: 11:41
 */

namespace Hph\Controller;
use Hph\Model\PlaceManager;
use Hph\Model\Place;


class PlaceController extends ControllerDefault
{
    public function getPlaces($showcase = NULL)
    {
        $places = new PlaceManager();
        return $places -> getPlaces($showcase);
    }

    public function render()
    {
        $places = $this->getPlaces();
        if(isset($_GET['error'])){
            $error = $_GET['error'];
        }else{
            $error = 1;
        }
        return $this->twig->render('place.html.twig', ['places'=>$places, 'error'=>$error]);
    }
}