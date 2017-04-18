<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 11/04/17
 * Time: 14:24
 */

namespace HPH\Model;


use Hph\Db;
use Hph\Model\Place;
use Hph\Model\Artist;
use Hph\Model\Concert;

class PlanningManager extends Db
{
    public function getPlace()
    {
        $req = "SELECT * FROM place";
        $res = $this->getDb()->query($req);
        return $res->fetchAll(\PDO::FETCH_BOTH);
    }

    public function getArtistId()
    {
        $req = "SELECT id FROM artist";
        $res = $this->getDb()->query($req);
        return $res->fetchAll(\PDO::FETCH_BOTH);
    }

    public function getConcert()
    {
        $req = "SELECT * FROM concert";
        $res = $this->getDb()->query($req);
        return $res->fetchAll(\PDO::FETCH_BOTH);
    }
}