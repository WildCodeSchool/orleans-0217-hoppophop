<?php

namespace Hph\Controller;
use Hph\Model\NewsManager;
use Hph\Model\ArtistManager;

class HomeController
{
    private function getNews()
    {
        $news = new NewsManager();
        return $news -> getNews(3);
    }
    private function getBreakingNews()
    {
        $news = new NewsManager();
        return $news -> getBreakingNews();
    }
    private function getArtists()
    {
        $artists = new ArtistManager();
        return $artists -> getArtists();
    }
    public function render($twig)
    {
        $news = $this->getNews();
        $breaking = $this->getBreakingNews();
        $artists = $this->getArtists();
        echo $twig->load('home.html.twig')->render(['newsAll'=>$news, 'newsBreaking'=>$breaking, 'artists'=>$artists]);
    }
    public function renderAdmin($twig)
    {
        $news = $this->getNews();
        $breaking = $this->getBreakingNews();
        $artists = $this->getArtists();
        echo $twig->load('home.html.twig')->render();
    }
}