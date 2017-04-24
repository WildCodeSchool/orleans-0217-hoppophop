<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 15:32
 */

namespace Hph\Model;
use Hph\ImgValidator;
use Hph\TextValidator;

class PartnerManager extends \Hph\Db
{
    public function getPartner()
    {
        $req = "SELECT * FROM partner";
        return $this->dBQuery($req, 'Partner');

    }
    public function addPartner($post, $file)
    {
        $vImg = new ImgValidator($file);
        $rImg = $vImg->validator();
        if($rImg!==true){
            return $rImg;
        }
        $vTitle = new TextValidator($post['url']);
        $rTitle = $vTitle->validate();
        if($rTitle!==true){
            return $rTitle;
        }
        $sql = "INSERT INTO partner VALUES (NULL, '".$file['img']['name']."', '".$post['url']."')";
        $result = $this->getDb()->exec($sql);
        if($result){
            return $this->addImg($file, 'partner');
        }
        return $result;
    }
    public function deletePartner($id)
    {
        $sql = "DELETE FROM partner WHERE id=".$id;
        return $this->getDb()->exec($sql);

    }
}