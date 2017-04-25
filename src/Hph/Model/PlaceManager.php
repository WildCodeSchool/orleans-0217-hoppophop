<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 13:37
 */

namespace Hph\Model;

use Hph\DateValidator;
use Hph\ImgValidator;
use Hph\TextValidator;
use PDO;


class PlaceManager extends \Hph\Db
{
    public function getPlaces($showcase = NULL)
    {
        if ($showcase != NULL) {
            $req = "SELECT * FROM place WHERE showcase=$showcase";
        } else {
            $req = "SELECT * FROM place";
        }
        return $this->dBQuery($req, 'Place');
    }

    public function addPlace($post, $file)
    {
        if (!isset($post['showcase'])) {
            $post['showcase'] = 0;
        }
        $vImg = new ImgValidator($file);
        $rImg = $vImg->validate();
        if($rImg!==true){
            return $rImg;
        }
        $vTitle = new TextValidator($post['name'], 150);
        $rTitle = $vTitle->validate();
        if($rTitle!==true){
            return $rTitle;
        }
        $vUrl = new TextValidator($post['url']);
        $rUrl = $vUrl->validate();
        if($rUrl!==true){
            return $rUrl;
        }
        $vStart = new DateValidator($post['start']);
        $rStart = $vStart->validate();
        if($rStart!==true){
            return $rStart;
        }
        $vEnd = new DateValidator($post['start']);
        $rEnd = $vEnd->validate();
        if($rEnd!==true){
            return $rEnd;
        }
        $vUrl = new TextValidator($post['url'], 0, 'url');
        $rUrl = $vUrl->validate();
        if($rUrl!==true){
            return $rUrl;
        }

        $query = "INSERT INTO place VALUES (NULL, :name, :url, :img, :start, :end, :showcase)";
        $prep = $this->getDb()->prepare($query);
        $prep->bindValue(':name', $post['name'], PDO::PARAM_STR);
        $prep->bindValue(':url', $post['url'], PDO::PARAM_STR);
        $prep->bindValue(':img', $file['img']['name'], PDO::PARAM_STR);
        $prep->bindValue(':start', $post['start'], PDO::PARAM_STR);
        $prep->bindValue(':end', $post['end'], PDO::PARAM_STR);
        $prep->bindValue(':showcase', $post['showcase'], PDO::PARAM_INT);
        $result = $prep->execute();
        if($result){
            return $this->addImg($file, 'place');
        }
        return $result;
    }
    public function findOne($id)
    {
        $req = "SELECT * FROM place WHERE id=$id";
        $places = $this->dBQuery($req, 'Place');
        return $places[0];
    }

    public function updatePlace($post, $file)
    {
        if (!isset($post['showcase'])) {
            $post['showcase'] = 0;
        }
        $vImg = new ImgValidator($file);
        $rImg = $vImg->validate();
        if($rImg!==true){
            return $rImg;
        }
        $vTitle = new TextValidator($post['name'], 150);
        $rTitle = $vTitle->validate();
        if($rTitle!==true){
            return $rTitle;
        }
        $vUrl = new TextValidator($post['url']);
        $rUrl = $vUrl->validate();
        if($rUrl!==true){
            return $rUrl;
        }
        $vStart = new DateValidator($post['start']);
        $rStart = $vStart->validate();
        if($rStart!==true){
            return $rStart;
        }
        $vEnd = new DateValidator($post['start']);
        $rEnd = $vEnd->validate();
        if($rEnd!==true){
            return $rEnd;
        }
        $vUrl = new TextValidator($post['url'], 0, 'url');
        $rUrl = $vUrl->validate();
        if($rUrl!==true){
            return $rUrl;
        }

        if ($file['img']['name'] != '') {
            $query = "UPDATE place SET name = :name, url = :url, img_place = img, start = :start, end = :end, showcase = :showcase WHERE id = :id";
        } else {
            $query = "UPDATE place SET name = :name, url = :url, start = :start, end = :end, showcase = :showcase WHERE id = :id";
        }
        $prep = $this->getDb()->prepare($query);
        $prep->bindValue(':name', $post['name'], PDO::PARAM_STR);
        $prep->bindValue(':url', $post['url'], PDO::PARAM_STR);
        $prep->bindValue(':img', $file['img']['name'], PDO::PARAM_STR);
        $prep->bindValue(':start', $post['start'], PDO::PARAM_STR);
        $prep->bindValue(':end', $post['end'], PDO::PARAM_STR);
        $prep->bindValue(':showcase', $post['showcase'], PDO::PARAM_INT);
        $prep->bindValue(':id', $post['id'], PDO::PARAM_INT);
        $result = $prep->execute();
        if($result){
            return $this->addImg($file, 'place');
        }
        return $result;
    }

    public function deletePlace($id)
    {
        $sql = "DELETE FROM place WHERE id=" . $id;
        return $this->getDb()->exec($sql);
    }

    public function listPlaces()
    {
        $req = "SELECT * FROM place";
        return $this->dBQuery($req, 'Place');
    }
}