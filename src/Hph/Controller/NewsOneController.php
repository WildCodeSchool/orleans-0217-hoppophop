<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 11/04/17
 * Time: 16:19
 */

namespace Hph\Controller;
use Hph\Model\NewsManager;

class NewsOneController extends ControllerDefault
{
    private function getNewsOne($id)
    {
        $news = new NewsManager();
        return $news -> getNewsOne($id);
    }
    public function render($id)
    {
        $news = $this->getNewsOne($id);
        return $this->twig->render('newsOne.html.twig', ['newsOne'=>$news]);
    }
}