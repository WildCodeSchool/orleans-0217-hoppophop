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
    public function addPlace($place)
    {
        $req = "INSERT INTO place VALUES (NULL, $place->getName(), $place->getUrl(), $place->getImg_place, $place->getStart, $place->getEnd, $place->getShowcase)";
        return $this->getDb()->exec($req);
    }
    public function findOne($id)
    {
        $req = "SELECT * FROM place WHERE id=$id";
        $places = $this->dBQuery($req, 'Place');
        return $places[0];
    }
}