<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 13:37
 */

namespace Hph\Model;


class PlaceManager extends \Hph\Db
{
    public function getPlaces($showcase)
    {
        $req = "SELECT * FROM place WHERE showcase=$showcase";
        return $this->dBQuery($req, 'Place');
    }
}