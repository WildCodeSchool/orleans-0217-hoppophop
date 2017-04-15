<?php

namespace Hph\Model;


class NewsManager extends \Hph\Db
{

    public function getNews($limit)
    {
        $req = "SELECT * FROM news LIMIT 0, $limit";
        return $this->dBQuery($req, 'News');
    }
    public function getNewsOne($id)
    {
        $req = "SELECT * FROM news WHERE id=$id";
        return $this->dBQuery($req, 'News');
    }
    public function getBreakingNews()
    {
        $req = "SELECT * FROM news WHERE breaking_news='1'";
        return $this->dBQuery($req, 'News');
    }
}