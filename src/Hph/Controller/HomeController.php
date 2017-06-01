<?php

namespace Hph\Controller;
use Hph\Model\NewsManager;
use Hph\Model\ArtistManager;
use Hph\Model\PartnerManager;

class HomeController extends ControllerDefault
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
    private function getPartnerFooter()
    {
        $partners = new PartnerManager();
        return $partners -> getPartnerFooter();
    }
    public function render()
    {
        $news = $this->getNews();
        $breaking = $this->getBreakingNews();
        $artists = $this->getArtists();
        $partners = $this->getPartnerFooter();
        return $this->twig->render('home.html.twig', ['newsAll'=>$news, 'newsBreaking'=>$breaking, 'artists'=>$artists, 'partners'=>$partners]);
    }
}