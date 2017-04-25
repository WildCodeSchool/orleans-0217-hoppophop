<?php

namespace Hph\Model;
use Hph\ImgValidator;
use Hph\TextValidator;

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
        $vImg = new ImgValidator($file);
        $rImg = $vImg->validate();
        if($rImg!==true){
            return $rImg;
        }
        $vTitle = new TextValidator($post['title'], 200);
        $rTitle = $vTitle->validate();
        if($rTitle!==true){
            return $rTitle;
        }
        $vText = new TextValidator($post['text']);
        $rText = $vText->validate();
        if($rText!==true){
            return $rText;
        }
        $sql = "INSERT INTO news VALUES (NULL, '".$post['title']."', '".$file['img']['name']."', '".$post['text']."', '".$post['breaking_news']."')";
        $result = $this->getDb()->exec($sql);
        if($result){
            return $this->addImg($file, 'news');
        }
        return $result;
    }
    public function updateNews($post, $file)
    {
        if(!isset($post['breaking_news'])){
            $post['breaking_news'] = 0;
        }
        $vImg = new ImgValidator($file);
        $rImg = $vImg->validate();
        if($rImg!==true){
            return $rImg;
        }
        $vTitle = new TextValidator($post['title'], 200);
        $rTitle = $vTitle->validate();
        if($rTitle!==true){
            return $rTitle;
        }
        $vText = new TextValidator($post['text']);
        $rText = $vText->validate();
        if($rText!==true){
            return $rText;
        }
        if($file['img']['name']!=''){
            $sql = "UPDATE news SET title = '".$post['title']."', text = '".$post['text']."', img_news = '".$file['img']['name']."', breaking_news = '".$post['breaking_news']."' WHERE id = '".$post['id']."'";
        }else{
            $sql = "UPDATE news SET title = '".$post['title']."', text = '".$post['text']."', breaking_news = '".$post['breaking_news']."' WHERE id = '".$post['id']."'";
        }
        $result = $this->getDb()->exec($sql);
        if($result){
            return $this->addImg($file, 'news');
        }
        return $result;
    }
    public function deleteNews($id)
    {
        $sql = "DELETE FROM news WHERE id=".$id;
        return $this->getDb()->exec($sql);
    }
}