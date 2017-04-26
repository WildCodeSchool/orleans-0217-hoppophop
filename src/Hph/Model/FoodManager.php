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

/*
 * Permet de :
 * - Ajouter un foodtruck (addFood)
 * - Modifier un foodtruck (updateFood)
 * - Supprimer un foodtruck (deleteFood)
 * - Voir les classes ImgValidator, TextValidator et DateValidator pour le fonctionnement des validateurs
 */
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
        if($file['img']['name']=='') {
            return 10;
        }
        $vImg = new ImgValidator($file);
        $rImg = $vImg->validate();
        if($rImg!==true){
            return $rImg;
        }
        $file['img']['name'] = $this->nameImg($file['img']['name']);
        $vTitle = new TextValidator($post['name'], 1, 255);
        $rTitle = $vTitle->validate();
        if($rTitle!==true){
            return $rTitle;
        }
        $vText = new TextValidator($post['content'], 1);
        $rText = $vText->validate();
        if($rText!==true){
            return $rText;
        }
        $vStart = new DateValidator($post['start'], 1);
        $rStart = $vStart->validate();
        if($rStart!==true){
            return $rStart;
        }
        $vEnd = new DateValidator($post['end'], 1);
        $rEnd = $vEnd->validate();
        if($rEnd!==true){
            return $rEnd;
        }
        $query = "INSERT INTO eat VALUES (NULL, :name, :img, :content)";
        $query2 = "INSERT INTO eat_place VALUES (LAST_INSERT_ID(), :place, :start, :end)";
        $prep = $this->getDb()->prepare($query);
        $prep2 = $this->getDb()->prepare($query2);
        $prep->bindValue(':name', $post['name'], PDO::PARAM_STR);
        $prep->bindValue(':img', $file['img']['name'], PDO::PARAM_STR);
        $prep->bindValue(':content', $post['content'], PDO::PARAM_STR);
        $prep2->bindValue(':place', $post['place'], PDO::PARAM_INT);
        $prep2->bindValue(':start', $post['start'], PDO::PARAM_STR);
        $prep2->bindValue(':end', $post['end'], PDO::PARAM_STR);
        $this->addImg($file, 'foodtruck');
        $result = $prep->execute();
        if($result){
            return $prep2->execute();
        }
        return $result;
    }
    public function updateFood($post, $file)
    {
        if ($file['img']['name'] != '') {
            $vImg = new ImgValidator($file);
            $rImg = $vImg->validate();
            if($rImg!==true){
                return $rImg;
            }
        }
        $vTitle = new TextValidator($post['name'], 1, 255);
        $rTitle = $vTitle->validate();
        if($rTitle!==true){
            return $rTitle;
        }
        $vText = new TextValidator($post['content'], 1);
        $rText = $vText->validate();
        if($rText!==true){
            return $rText;
        }
        $vStart = new DateValidator($post['start'], 1);
        $rStart = $vStart->validate();
        if($rStart!==true){
            return $rStart;
        }
        $vEnd = new DateValidator($post['end'], 1);
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
        $prep2->bindValue(':id', $post['id'], PDO::PARAM_INT);
        $prep->bindValue(':name', $post['name'], PDO::PARAM_STR);
        $prep->bindValue(':img', $file['img']['name'], PDO::PARAM_STR);
        $prep->bindValue(':content', $post['content'], PDO::PARAM_STR);
        $prep2->bindValue(':place', $post['place'], PDO::PARAM_INT);
        $prep2->bindValue(':start', $post['start'], PDO::PARAM_STR);
        $prep2->bindValue(':end', $post['end'], PDO::PARAM_STR);
        if($file['img']['name']!=''){
            $this->addImg($file, 'foodtruck', $post['id']);
        }
        $result = $prep->execute();
        if($result){
            return $prep2->execute();
        }
        return $result;
    }
    public function deleteFood($id)
    {
        $query = "DELETE FROM eat_place WHERE eat_id = :id";
        $query2 = "DELETE FROM eat WHERE id = :id";
        $prep = $this->getDb()->prepare($query);
        $prep2 = $this->getDb()->prepare($query2);
        $prep->bindValue(':id', $id, PDO::PARAM_INT);
        $prep2->bindValue(':id', $id, PDO::PARAM_INT);
        $this->supprImg($id, 'foodtruck');
        $result = $prep->execute();
        if($result){
            return $prep2->execute();
        }
        return $result;
    }
}