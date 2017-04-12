<?php

namespace Hph;

class Db
{
    private $db;
    /**
     * @return \PDO
     */
    public function getDb()
    {
        return $this->db;
    }
    public function render($req, $model)
    {
        return $this->db->query($req)->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__.'\Model\\'.ucfirst($model));
    }
    public function __construct()
    {
        $this->db = new \PDO(DSN, USER, PASS);
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->db->query('SET NAMES utf8');
    }
}