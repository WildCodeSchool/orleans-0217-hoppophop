<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 09:02
 */

namespace Hph\Model;


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
        $upload = $this->addImg($file, 'foodtruck');
        if($upload!=true){
            return $upload;
        }
        $sql = "INSERT INTO eat VALUES (NULL, '".$post['name']."', '".$file['img']['name']."', '".$post['content']."');";
        $sql2 = "INSERT INTO eat_place VALUES (LAST_INSERT_ID(), '".$post['place']."', '".$post['start']."', '".$post['end']."')";
        $this->getDb()->exec($sql);
        return $this->getDb()->exec($sql2);

    }
    public function updateFood($post, $file)
    {
        $upload = $this->addImg($file, 'foodtruck');
        if($upload!=true){
            return $upload;
        }
        if($file['img']['name']!=''){
            $sql = "UPDATE eat SET name = '".$post['name']."', content = '".$post['content']."', img_eat = '".$file['img']['name']."' WHERE id = '".$post['id']."'";
        }else{
            $sql = "UPDATE eat SET name = '".$post['name']."', content = '".$post['content']."' WHERE id = '".$post['id']."'";
        }
        $sql2 = "UPDATE eat_place SET place_id = '".$post['place']."', start = '".$post['start']."', end = '".$post['end']."' WHERE eat_id = '".$post['id']."'";
        $this->getDb()->exec($sql);
        return $this->getDb()->exec($sql2);
    }
    public function deleteFood($id)
    {
        $sql = "DELETE FROM eat_place WHERE eat_id=".$id;
        $sql2 = "DELETE FROM eat WHERE id=".$id;
        return $this->getDb()->exec($sql);
    }
}