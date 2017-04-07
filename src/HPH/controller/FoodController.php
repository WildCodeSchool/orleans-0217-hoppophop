<?php

namespace HPH\controller;

class FoodController
{
    public function render ($twig)
    {
        $template = $twig->load('food.html.twig');
        echo $template->render(array('title' => 'Titre du Food Truck', 'text' => 'Description du Food Truck'));
    }
}