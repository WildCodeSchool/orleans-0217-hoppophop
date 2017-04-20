<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 13:52
 */

namespace Hph\Model;
use Valitron;

class SundayManager extends \Hph\Db
{
    public function getSunday()
    {
        $req = "SELECT * FROM sunday";
        return $this->dBQuery($req, 'Sunday');
    }
    public function addSunday($post, $file)
    {
        $p = new Valitron\Validator($post);
        $p->rule('required', ['title', 'content']);
        if($p->validate()) {
            $upload = $this->addImg($file, 'sunday');
            if($upload!=true){
                return $upload;
            }
            $sql = "INSERT INTO sunday VALUES (NULL, '".$post['title']."', '".$file['img']['name']."', '".$post['content']."')";
            return $this->getDb()->exec($sql);
        } else {
            return $p->errors();
        }
    }
    public function updateSunday($post, $file)
    {
        $upload = $this->addImg($file, 'sunday');
        if($upload!=true){
            return $upload;
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
        $sql = "DELETE FROM sunday WHERE id=".$id;
        return $this->getDb()->exec($sql);
    }
}