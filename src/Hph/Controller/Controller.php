<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 07/04/17
 * Time: 17:00
 */

namespace Hph\Controller;
require '../../connect.php';


class Controller
{
    private $db;
    public function __construct()
    {
        $this->db = new \PDO(DSN, USER, PASS);
    }
}