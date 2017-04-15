<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 11/04/17
 * Time: 17:05
 */

namespace Hph\Model;


class ArtistManager extends \Hph\Db
{
    public function getArtists()
    {
        $req = "SELECT * FROM artist";
        return $this->render($req, 'Artist');
    }
}