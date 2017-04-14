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
        $this->db->query('SET NAMES utf8');    }


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


}