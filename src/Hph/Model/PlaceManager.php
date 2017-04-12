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
    public function getPlaces()
    {
        $req = "SELECT * FROM place";
        return $this->render($req, 'Place');
    }
}