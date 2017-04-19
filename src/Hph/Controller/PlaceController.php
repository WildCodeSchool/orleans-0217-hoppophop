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

    public function addPlace($post, $file)
    {
        if(!isset($post['showcase'])){
            $post['showcase'] = 0;
        }
        if($this->addImg($file)==false){
            return $this->twig->render('place.html.twig', ['places'=>$places, 'error'=>'img']);
        }
        $place = new Place();
        $place->setName($post['name']);
        $place->setShowcase($post['showcase']);
        $place->setStart($post['start']);
        $place->setEnd($post['end']);
        $place->setUrl($post['url']);
        $place->setImgPlace($post['img']);
    }

    public function render()
    {
        $places = $this->getPlaces();
        return $this->twig->render('place.html.twig', ['places'=>$places, 'error'=>'']);
    }
}