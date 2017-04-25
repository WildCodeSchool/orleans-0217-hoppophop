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
use PDO;
class PartnerManager extends \Hph\Db
{
    public function getPartner()
    {
        $req = "SELECT * FROM partner ORDER BY type ASC";
        return $this->dBQuery($req, 'Partner');

    }
    public function addPartner($post, $file)
    {
        if(!isset($post['footer'])){
            $post['footer'] = 0;
        }
        $vImg = new ImgValidator($file);
        $rImg = $vImg->validate();
        if($rImg!==true){
            return $rImg;
        }
        $file['img']['name'] = $this->nameImg($file['img']['name']);
        $vUrl = new TextValidator($post['url'], 0, 'url');
        $rUrl = $vUrl->validate();
        if($rUrl!==true){
            return $rUrl;
        }
        $query = "INSERT INTO partner VALUES (NULL, :img, :url, :footer, :type)";
        $prep = $this->getDb()->prepare($query);
        $prep->bindValue(':type', $post['type'], PDO::PARAM_STR);
        $prep->bindValue(':img', $file['img']['name'], PDO::PARAM_STR);
        $prep->bindValue(':url', $post['url'], PDO::PARAM_STR);
        $prep->bindValue(':footer', $post['footer'], PDO::PARAM_INT);
        $this->addImg($file, 'partner');
        return $prep->execute();
    }
    public function deletePartner($id)
    {
        $query = "DELETE FROM partner WHERE id = :id";
        $prep = $this->getDb()->prepare($query);
        $prep->bindValue(':id', $id, PDO::PARAM_INT);
        $this->supprImg($id, 'partner');
        return $prep->execute();
    }
}