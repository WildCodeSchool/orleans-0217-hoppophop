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

    public function dBQuery($req, $model)
    {
        return $this->db->query($req)->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . '\Model\\'.ucfirst($model));
    }
    public function addImg($file, $type)
    {
        if ($type == 'place') {
            $src = realpath(dirname(getcwd())).'/web/img/place/';
        }
        if ($file['img']['error'] == 0) {
            $tmp = $file['img']['tmp_name'];
            $name = $file['img']['name'];
            if (move_uploaded_file($tmp, $src.$name)) {
                return true;
            } else {
                return "Erreur : L'upload de l'image a échoué";
            }
        } else {
            return "Erreur : L'image n'a pas été uploadé";
        }
    }

}