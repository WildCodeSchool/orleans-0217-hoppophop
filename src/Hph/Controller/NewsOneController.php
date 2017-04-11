<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 11/04/17
 * Time: 16:19
 */

namespace Hph\Controller;
use Hph\Model\NewsManager;

class NewsOneController
{
    private function getNewsOne($id)
    {
        $news = new NewsManager();
        return $news -> getNewsOne($id);
    }
    public function render($twig, $id)
    {
        $news = $this->getNewsOne($id);
        echo $twig->load('newsOne.html.twig')->render(['newsOne'=>$news]);
    }
}