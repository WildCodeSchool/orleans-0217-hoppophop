<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 11/04/17
 * Time: 14:24
 */

namespace HPH\Model;


use Hph\Db;

class PlanningManager extends Db
{
    public function getConcertHall()
    {
        $req = "SELECT name FROM place";
        $res = $this->getDb()->query($req);
        return $res->fetchAll(\PDO::FETCH_CLASS, 'HPH\Model\Place');
    }

    public function getArtist()
    {
        $req = "SELECT name FROM artist";
        $res = $this->getDb()->query($req);
        return $res->fetchAll(\PDO::FETCH_CLASS, 'HPH\Model\Artist');
    }

    public function getConcertHour()
    {
        $req = "SELECT concert_start,concert_end FROM concert";
        $res = $this->getDb()->query($req);
        return $res->fetchAll(\PDO::FETCH_CLASS, 'HPH\Model\Concert');
    }
}