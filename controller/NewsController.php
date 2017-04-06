<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 06/04/17
 * Time: 17:04
 */

namespace hph;

use hph\Controller;

class NewsController extends Controller
{
    public function getNews() {
        //$news = new News();

        return $this->render('article/addArticle.php', ['id'=>1, 'title'=>'Titre', 'text'=>'text', 'img'=>'chuck.png']);
    }
}