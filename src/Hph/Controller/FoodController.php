<?php

namespace Hph\Controller;
use Hph\Model\FoodManager;

class FoodController
{
    private function getFood()
    {
        $food = new FoodManager();
        return $food->getFood();
    }
    public function render($twig)
    {
        $food = $this->getFood();
        echo $twig->load('food.html.twig')->render(['foods'=>$food]);
    }
}