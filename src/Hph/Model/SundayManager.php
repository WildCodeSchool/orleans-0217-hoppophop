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
        $rImg = $vImg->validator();
        $vTitle = new TextValidator($post['title'], 'string', 200);
        $rTitle = $vTitle->validate();
        if($rTitle!==true){
            return $rTitle;
        }
        $vText = new TextValidator($post['content'], 'string');
        $rText = $vText->validate();
        if($rText!==true){
            return $rText;
        }
        if($rImg!==true){
            return $rImg;
        }
        $sql = "INSERT INTO sunday VALUES (NULL, '".$post['title']."', '".$file['img']['name']."', '".$post['content']."')";
        $result = $this->getDb()->exec($sql);
        if($result){
            return $this->addImg($file, 'sunday');
        }
        return $result;
    }
    public function updateSunday($post, $file)
    {
        $upload = $this->addImg($file, 'sunday');
        if($upload!=true){
            return $upload;
        }
        $v = new Validator();
        if($v->isInt($post['id'])===false){
            return 'L\'identifiant de l\'activité est incorrect';
        }
        if($v->isString($post['title'], 200)===false){
            return 'Le titre de l\'activité doit faire moins de 200 caractères';
        }
        if($v->isString($post['content'])===false){
            return 'La description de l\'activité doit être un texte';
        }
        if($file['img']['name']!=''){
            $sql = "UPDATE sunday SET title = '".$post['title']."', content = '".$post['content']."', img_sunday = '".$file['img']['name']."' WHERE id = '".$post['id']."'";
        }else{
            $sql = "UPDATE sunday SET title = '".$post['title']."', content = '".$post['content']."' WHERE id = '".$post['id']."'";
        }

        return $this->getDb()->exec($sql);
    }
    public function deleteSunday($id)
    {
        $v = new Validator();
        if($v->isInt($post['id'])==false){
            return 'L\'identifiant de l\'activité est incorrect';
        }
        $sql = "DELETE FROM sunday WHERE id=".$id;
        return $this->getDb()->exec($sql);
    }
}