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
    public function getPlaces($showcase = NULL)
    {
        if($showcase!=NULL){
            $req = "SELECT * FROM place WHERE showcase=$showcase";
        }else{
            $req = "SELECT * FROM place";
        }
        return $this->dBQuery($req, 'Place');
    }
    public function addPlace($place)
    {
        $req = "INSERT INTO place VALUES (NULL, $place->getName(), $place->getUrl(), $place->getImg_place, $place->getStart, $place->getEnd, $place->getShowcase)";
        return $pdo->exec($req);
    }
}