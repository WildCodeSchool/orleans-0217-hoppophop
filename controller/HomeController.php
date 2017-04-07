<?php

namespace hph\controller;

class HomeController
{
    public function render ($twig)
    {
        $template = $twig->load('home.html.twig');
        echo $template->render(array('title' => 'Le Titre de la mort qui tue', 'text' => 'Le Texte', 'breakingNews' => 0));
    }
}