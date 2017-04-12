<?php

namespace Hph\Model;


class NewsManager extends \Hph\Db
{


    public function getNewsOne($id)
    {
        $req = "SELECT * FROM news WHERE id=$id";
        return $this->render($req, 'News');
    }
    public function getBreakingNews()
    {
        $req = "SELECT * FROM news WHERE breaking_news='1'";
        return $this->render($req, 'News');
    }
}