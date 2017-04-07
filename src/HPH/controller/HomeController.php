<?php

namespace HPH\controller;

class HomeController
{
    public function render ($twig)
    {
        $template = $twig->load('home.html.twig');
        echo $template->render(array('title' => 'Titre de la News', 'text' => 'Texte de la News', 'breakingNews' => 1));
    }
}