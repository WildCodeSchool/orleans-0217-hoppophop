<?php

namespace Hph\Controller;
use Hph\Model\FoodManager;
use Hph\Model\PlaceManager;

class FoodController extends ControllerDefault
{
    private function getFood()
    {
        $food = new FoodManager();
        return $food->getFood();
    }
    public function render()
    {
        $food = $this->getFood();
        $places = new PlaceManager();
        return $this->twig->render('food.html.twig', ['foods'=>$food, 'places'=>$places -> getPlaces(), 'error'=>$_GET['error'], 'partners'=>$partner]);
    }
}