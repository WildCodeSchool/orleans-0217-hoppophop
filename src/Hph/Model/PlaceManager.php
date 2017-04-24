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
        $rImg = $vImg->validator();
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

        $sql = "INSERT INTO place VALUES (NULL, '" . $post['name'] . "', '" . $post['url'] . "', '" . $file['img']['name'] . "', '" . $post['start'] . "', '" . $post['end'] . "', '" . $post['showcase'] . "')";
        $result = $this->getDb()->exec($sql);
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
        $rImg = $vImg->validator();
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
        if ($file['img']['name'] != '') {
            $sql = "UPDATE place SET name = '" . $post['name'] . "', url = '" . $post['url'] .
                "', img_place = '" . $file['img']['name'] . "', START = '" . $post['start'] .
                "', END = '" . $post['end'] . "', showcase = '" . $post['showcase'] .
                "' WHERE id = '" . $post['id'] . "'";
        } else {
            $sql = "UPDATE place SET name = '" . $post['name'] . "', url = '" . $post['url'] .
                "', START = '" . $post['start'] . "', END = '" . $post['end'] .
                "', showcase = '" . $post['showcase'] . "' WHERE id = '" . $post['id'] . "'";
        }
        $result = $this->getDb()->exec($sql);
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