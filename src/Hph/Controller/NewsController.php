<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 11/04/17
 * Time: 16:09
 */

namespace Hph\Controller;
use Hph\Model\NewsManager;

class NewsController extends ControllerDefault
{
    private function getNews()
    {
        $news = new NewsManager();
        return $news -> getNews(999);
    }
    public function render()
    {
        $news = $this->getNews();
        $partner = $this->getPartner();
        return $this->twig->render('news.html.twig', ['newsAll'=>$news, 'error'=>$_GET['error'], 'partners'=>$partner]);
    }
}