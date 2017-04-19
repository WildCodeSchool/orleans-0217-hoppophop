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
    public function addNews($post, $file)
    {
        if(!isset($post['breaking_news'])){
            $post['breaking_news'] = 0;
        }
        $upload = $this->addImg($file, 'news');
        if($upload!=true){
            return $upload;
        }
        $sql = "INSERT INTO news VALUES (NULL, '".$post['title']."', '".$file['img']['name']."', '".$post['text']."', '".$post['breaking_news']."')";
        return $this->getDb()->exec($sql);
    }
    public function updateNews($post, $file)
    {
        if(!isset($post['breaking_news'])){
            $post['breaking_news'] = 0;
        }
        $upload = $this->addImg($file, 'news');
        if($upload!=true){
            return $upload;
        }
        $sql = "UPDATE news SET title = '".$post['title']."', text = '".$post['text']."', img_news = '".$file['img']['name']."', breaking_news = '".$post['breaking_news']."' WHERE id = '".$post['id']."'";
        return $this->getDb()->exec($sql);
    }
    public function deleteNews($id)
    {
        $sql = "DELETE FROM news WHERE id=".$id;
        return $this->getDb()->exec($sql);
    }
}