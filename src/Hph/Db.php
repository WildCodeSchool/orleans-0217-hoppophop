<?php

namespace Hph;

require_once 'connect.php';
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
    public function __construct()
    {
        $this->db = new \PDO(DSN, USER, PASS);
    }

    public function findAll($table) {
        $req = "SELECT * FROM $table";
        $res = $this->db->query($req);
        return $res->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . '\Model\\'.ucfirst($table));
    }

    public function findSome($table, $limit) {
        $req = "SELECT * FROM $table LIMIT 0,$limit";
        $res = $this->db->query($req);
        return $res->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . '\Model\\'.ucfirst($table));
    }

    public function findOne($table, $id) {
        $req = "SELECT * FROM $table WHERE id=:id";
        $prep = $this->db->prepare($req);
        $prep->bindValue(':id', $id, \PDO::PARAM_INT);

        $prep->execute();

        $res = $prep->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . '\Model\\'.ucfirst($table));
        return $res[0];
    }
}