<?php

namespace Hph\Controller;
use Hph\Model\NewsManager;

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
    public function render($twig)
    {
        $news = $this->getNews();
        $breaking = $this->getBreakingNews();
        echo $twig->load('home.html.twig')->render(['newsAll'=>$news, 'newsBreaking'=>$breaking]);
    }
}