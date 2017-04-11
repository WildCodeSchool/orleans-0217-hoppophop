<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 11/04/17
 * Time: 16:09
 */

namespace Hph\Controller;
use Hph\Model\NewsManager;

class NewsController
{
    private function getNews()
    {
        $news = new NewsManager();
        return $news -> getNews(100);
    }
    public function render($twig)
    {
        $news = $this->getNews();
        echo $twig->load('news.html.twig')->render(['newsAll'=>$news]);
    }
}