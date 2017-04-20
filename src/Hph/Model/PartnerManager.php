<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 15:32
 */

namespace Hph\Model;


class PartnerManager extends \Hph\Db
{
    public function getPartner()
    {
        $req = "SELECT * FROM partner";
        return $this->dBQuery($req, 'Partner');
<<<<<<< HEAD
=======
    }
    public function addPartner($post, $file)
    {
        if(!isset($post['showcase'])){
            $post['showcase'] = 0;
        }
        $upload = $this->addImg($file, 'partner');
        if($upload!=true){
            return $upload;
        }
        $sql = "INSERT INTO partner VALUES (NULL, '".$file['img']['name']."', '".$post['url']."')";
        return $this->getDb()->exec($sql);
    }
    public function deletePartner($id)
    {
        $sql = "DELETE FROM partner WHERE id=".$id;
        return $this->getDb()->exec($sql);
>>>>>>> 847d55f7a36dea8f2dca1c7f4b0e9bb9f1da93d0
    }
}