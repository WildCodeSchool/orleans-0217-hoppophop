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
        $sql = "INSERT INTO sunday VALUES (NULL, '".$post['title']."', '".$file['img']['name']."', '".$post['content']."')";
        $result = $this->getDb()->exec($sql);
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
            $sql = "UPDATE sunday SET title = '".$post['title']."', content = '".$post['content']."', img_sunday = '".$file['img']['name']."' WHERE id = '".$post['id']."'";
        }else{
            $sql = "UPDATE sunday SET title = '".$post['title']."', content = '".$post['content']."' WHERE id = '".$post['id']."'";
        }
        $result = $this->getDb()->exec($sql);
        if($result){
            return $this->addImg($file, 'sunday');
        }
        return $result;
    }
    public function deleteSunday($id)
    {
        $sql = "DELETE FROM sunday WHERE id=".$id;
        return $this->getDb()->exec($sql);
    }
}