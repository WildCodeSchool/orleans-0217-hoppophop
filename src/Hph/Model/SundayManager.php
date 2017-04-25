<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 13:52
 */

namespace Hph\Model;

use Hph\ImgValidator;
use Hph\TextValidator;
use PDO;

class SundayManager extends \Hph\Db
{
    public function getSunday()
    {
        $req = "SELECT * FROM sunday";
        return $this->dBQuery($req, 'Sunday');
    }
    public function addSunday($post, $file)
    {
        $vImg = new ImgValidator($file);
        $rImg = $vImg->validate();
        if($rImg!==true){
            return $rImg;
        }
        $file['img']['name'] = $this->nameImg($file['img']['name']);
        $vTitle = new TextValidator($post['title'], 200);
        $rTitle = $vTitle->validate();
        if($rTitle!==true){
            return $rTitle;
        }
        $vText = new TextValidator($post['content']);
        $rText = $vText->validate();
        if($rText!==true){
            return $rText;
        }
        $query = "INSERT INTO sunday VALUES (NULL, :title, :img, :content)";
        $prep = $this->getDb()->prepare($query);
        $prep->bindValue(':title', $post['title'], PDO::PARAM_STR);
        $prep->bindValue(':img', $file['img']['name'], PDO::PARAM_STR);
        $prep->bindValue(':content', $post['content'], PDO::PARAM_STR);
        $result = $prep->execute();
        if($result){
            return $this->addImg($file, 'sunday');
        }
        return $result;
    }
    public function updateSunday($post, $file)
    {
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
        $vText = new TextValidator($post['content']);
        $rText = $vText->validate();
        if($rText!==true){
            return $rText;
        }
        if($file['img']['name']!=''){
            $file['img']['name'] = $this->nameImg($file['img']['name']);
            $query = "UPDATE sunday SET title = :title, content = :content, img_sunday = :img WHERE id = :id";
        }else{
            $query = "UPDATE sunday SET title = :title, content = :content WHERE id = :id";
        }
        $prep = $this->getDb()->prepare($query);
        $prep->bindValue(':title', $post['title'], PDO::PARAM_STR);
        $prep->bindValue(':img', $file['img']['name'], PDO::PARAM_STR);
        $prep->bindValue(':content', $post['content'], PDO::PARAM_STR);
        $prep->bindValue(':id', $post['id'], PDO::PARAM_INT);
        $result = $prep->execute();
        if($result){
            if($file['img']['name']!=''){
                return $this->addImg($file, 'sunday', $post['id']);
            }
            return true;
        }
        return $result;
    }
    public function deleteSunday($id)
    {
        $sql = "DELETE FROM sunday WHERE id=".$id;
        return $this->getDb()->exec($sql);
    }
}