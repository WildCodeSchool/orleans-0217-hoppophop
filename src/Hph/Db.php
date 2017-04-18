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


}