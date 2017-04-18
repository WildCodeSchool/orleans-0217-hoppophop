<?php

namespace Hph\Controller;
use Hph\Db;

class HomeController
{
    private function getNews()
    {
        $db = new DB();
        return '1';
    }
    private function getBreaking()
    {
        $db = new DB();
        return '1';
    }
    public function render($twig)
    {
        $news = $this->getNews();
        $breaking = $this->getNews();
        echo $twig->load('home.html.twig')->render(['newsAll'=>$news, 'newsBreaking'=>$breaking]);
    }
}