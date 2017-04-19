<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 13:37
 */

namespace Hph\Model;


class PlaceManager extends \Hph\Db
{
    public function getPlaces($showcase = NULL)
    {
        if($showcase!=NULL){
            $req = "SELECT * FROM place WHERE showcase=$showcase";
        }else{
            $req = "SELECT * FROM place";
        }
        return $this->dBQuery($req, 'Place');
    }
    public function addPlace($post, $file)
    {
        if(!isset($post['showcase'])){
            $post['showcase'] = 0;
        }
        $upload = $this->addImg($file, 'place');
        if($upload!=true){
            return $upload;
        }
        $sql = "INSERT INTO place VALUES (NULL, '".$post['name']."', '".$post['url']."', '".$file['img']['name']."', '".$post['start']."', '".$post['end']."', '".$post['showcase']."')";
        return $this->getDb()->exec($sql);
    }
    public function updatePlace($post, $file)
    {
        if(!isset($post['showcase'])){
            $post['showcase'] = 0;
        }
        $upload = $this->addImg($file, 'place');
        if($upload!=true){
            return $upload;
        }
        if($file['img']['name']!='') {
            $sql = "UPDATE place SET name = '" . $post['name'] . "', url = '" . $post['url'] . "', img_place = '" . $file['img']['name'] . "', START = '" . $post['start'] . "', END = '" . $post['end'] . "', showcase = '" . $post['showcase'] . "' WHERE id = '" . $post['id'] . "'";
        }else{
            $sql = "UPDATE place SET name = '" . $post['name'] . "', url = '" . $post['url'] . "', START = '" . $post['start'] . "', END = '" . $post['end'] . "', showcase = '" . $post['showcase'] . "' WHERE id = '" . $post['id'] . "'";
        }
        return $this->getDb()->exec($sql);
    }
    public function deletePlace($id)
    {
        $sql = "DELETE FROM place WHERE id=".$id;
        return $this->getDb()->exec($sql);
    }
}