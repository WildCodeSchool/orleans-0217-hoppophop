<?php

namespace Hph\Controller;

class FoodController
{
    public function render ($twig)
    {
        echo $twig->load('food.html.twig')->render(array(
            'title' => 'La Jungle',
            'text' => 'Une six-cordes et un casio. Il n’en faut parfois pas plus pour faire péter le mercure et irriter les yeux de sueur après deux breaks et trois accords. Deux singes rouquins, un très grand et un plus petit, vous emmènent dans leur milieu naturel : La Jungle !',
        ));
    }
}