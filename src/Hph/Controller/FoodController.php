<?php

namespace Hph\Controller;
use Hph\Model\FoodManager;

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
        return $this->twig->render('food.html.twig', ['foods'=>$food]);
    }
}