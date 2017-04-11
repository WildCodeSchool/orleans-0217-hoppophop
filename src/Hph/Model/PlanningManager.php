<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 11/04/17
 * Time: 14:24
 */

namespace HPH\Model;


class PlanningManager extends \Hph\Db
{
    public function getConcertHall ()
    {
        $req = "SELECT name FROM place";
        $res = $this->db->query($req);
        return $res->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . '\model\Place');
    }

    public function getArtist ()
    {
        $req = "SELECT name FROM artist";
        $res = $this->db->query($req);
        return $res->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . '\model\Artist');
    }

    public function getConcertHour ()
    {
        $req = "SELECT concert_start,concert_end FROM concert";
        $res = $this->db->query($req);
        return $res->fetchAll(\PDO::FETCH_CLASS,__NAMESPACE__ . 'model\Concert');
    }
}