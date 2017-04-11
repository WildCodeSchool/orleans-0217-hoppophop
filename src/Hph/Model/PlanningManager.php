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
    public function getConcertHall () {
        $req = "SELECT concert_hall_name FROM concert_hall";
        $res = $req->
    }
}