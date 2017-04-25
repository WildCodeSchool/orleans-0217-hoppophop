<?php

namespace Hph;


class Db
{
    private $db;
    /**
     * DB constructor.
     * @param $db */

    public function __construct()
    {
        $this->db = new \PDO(DSN, USER, PASS);
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->db->query('SET NAMES utf8');
    }


    /**
     * @return \PDO
     */
    public function getDb()
    {
        return $this->db;
    }

    public function dBQueryOne($req)
    {
        return $this->db->query($req)->fetch();
    }

    public function dBQuery($req, $model)
    {
        return $this->db->query($req)->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . '\Model\\'.ucfirst($model));
    }

    public function dBQueryWoFetchStyle($req)
    {
        return $this->db->query($req)->fetchAll();
    }


    public function dBFetchAll($req)
    {
        return $this->db->query($req)->fetchAll();
    }

    public function supprImg($id, $type)
    {
        if ($type == 'artist')
        {
            $req = "SELECT img_artist FROM artist WHERE id=$id";
        }
        elseif ($type == 'foodtruck')
        {
            $req = "SELECT img_eat FROM eat WHERE id=$id";
        }
        elseif ($type == 'news')
        {
            $req = "SELECT img_news FROM news WHERE id=$id";
        }
        elseif ($type == 'partner')
        {
            $req = "SELECT img_partner FROM partner WHERE id=$id";
        }
        elseif ($type == 'place')
        {
            $req = "SELECT img_place FROM place WHERE id=$id";
        }
        elseif ($type == 'sunday')
        {
            $req = "SELECT img_sunday FROM sunday WHERE id=$id";
        }
        $reqDone = $this->dBQueryWoFetchStyle($req);
        $src = realpath(dirname(getcwd())).'/web/img/'.$type.'/';
        if(unlink($src.$reqDone['0']['0'])){
            return true;
        }
        return false;
    }

    public function addImg($file, $type, $delete = 0)
    {
        $src = realpath(dirname(getcwd())) . '/web/img/' . $type . '/';
        if ($file['img']['error'] == 0) {
            $tmp = $file['img']['tmp_name'];
            $name = $file['img']['name'];
            if ($delete > 0) {
                $this->supprImg($delete, $type);
            }
            if (move_uploaded_file($tmp, $src . $name)) {
                return true;
            }
            return false;
        }
        return false;
    }
    public function nameImg($name)
    {
        return rand(0,9999999).'_'.$name;
    }
}