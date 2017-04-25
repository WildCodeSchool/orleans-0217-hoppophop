<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 09:02
 */

namespace Hph\Model;
use Hph\ImgValidator;
use Hph\TextValidator;
use Hph\DateValidator;
use PDO;

class FoodManager extends \Hph\Db
{
    public function getFood()
    {
        $req = "SELECT eat.id, eat.name, eat.img_eat, eat.content, eat_place.eat_id, eat_place.place_id, eat_place.start, eat_place.end, place.id as place_id, place.name as place_name
FROM eat 
JOIN eat_place ON eat.id=eat_place.eat_id 
JOIN place ON place.id=eat_place.place_id
";
        return $this->dBQuery($req, 'Food');
    }
    public function addFood($post, $file)
    {
        $vImg = new ImgValidator($file);
        $rImg = $vImg->validate();
        if($rImg!==true){
            return $rImg;
        }
        $file['img']['name'] = $this->nameImg($file['img']['name']);
        $vTitle = new TextValidator($post['name'], 255);
        $rTitle = $vTitle->validate();
        if($rTitle!==true){
            return $rTitle;
        }
        $vText = new TextValidator($post['content']);
        $rText = $vText->validate();
        if($rText!==true){
            return $rText;
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
        $query = "INSERT INTO eat VALUES (NULL, :name, :img, :content);";
        $query2 = "INSERT INTO eat_place VALUES (LAST_INSERT_ID(), :place, :start, :end)";
        $prep = $this->getDb()->prepare($query);
        $prep2 = $this->getDb()->prepare($query2);
        $prep->bindValue(':name', $post['name'], PDO::PARAM_STR);
        $prep->bindValue(':img', $file['img']['name'], PDO::PARAM_STR);
        $prep->bindValue(':content', $post['content'], PDO::PARAM_STR);
        $prep->bindValue(':place', $post['place'], PDO::PARAM_INT);
        $prep->bindValue(':start', $post['start'], PDO::PARAM_STR);
        $prep->bindValue(':end', $post['end'], PDO::PARAM_STR);
        $result = $prep->execute();
        $result2 = $prep2->execute();
        if($result){
            if($result2){
                return $this->addImg($file, 'foodtruck');
            }
            return $result2;
        }
        return $result;
    }
    public function updateFood($post, $file)
    {
        $vImg = new ImgValidator($file);
        $rImg = $vImg->validate();
        if($rImg!==true){
            return $rImg;
        }
        $vTitle = new TextValidator($post['name'], 255);
        $rTitle = $vTitle->validate();
        if($rTitle!==true){
            return $rTitle;
        }
        $vText = new TextValidator($post['content']);
        $rText = $vText->validate();
        if($rText!==true){
            return $rText;
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
        if($file['img']['name']!=''){
            $file['img']['name'] = $this->nameImg($file['img']['name']);
            $query = "UPDATE eat SET name = :name, content = :content, img_eat = :img WHERE id = :id";
        }else{
            $query = "UPDATE eat SET name = :name, content = :content WHERE id = :id";
        }
        $query2 = "UPDATE eat_place SET place_id = :place, start = :start, end = :end WHERE eat_id = :id";
        $prep = $this->getDb()->prepare($query);
        $prep2 = $this->getDb()->prepare($query2);
        $prep->bindValue(':id', $post['id'], PDO::PARAM_INT);
        $prep->bindValue(':name', $post['name'], PDO::PARAM_STR);
        $prep->bindValue(':img', $file['img']['name'], PDO::PARAM_STR);
        $prep->bindValue(':content', $post['content'], PDO::PARAM_STR);
        $prep->bindValue(':place', $post['place'], PDO::PARAM_INT);
        $prep->bindValue(':start', $post['start'], PDO::PARAM_STR);
        $prep->bindValue(':end', $post['end'], PDO::PARAM_STR);
        $result = $prep->execute();
        $result2 = $prep2->execute();
        if($result){
            if($result2){
                if($file['img']['name']!=''){
                    return $this->addImg($file, 'foodtruck', $post['id']);
                }
                return true;
            }
            return $result2;
        }
        return $result;
    }
    public function deleteFood($id)
    {
        $sql = "DELETE FROM eat_place WHERE eat_id=".$id;
        $sql2 = "DELETE FROM eat WHERE id=".$id;
        $result = $this->getDb()->exec($sql);
        $result2 = $this->getDb()->exec($sql2);
        if($result){
            if($result2){
                return $this->supprImg($id, 'foodtruck');
            }
            return $result2;
        }
        return $result;
    }
}