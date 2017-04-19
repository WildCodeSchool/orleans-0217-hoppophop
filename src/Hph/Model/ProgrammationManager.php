<?php
/**
 * Created by PhpStorm.
 * User: wilder1
 * Date: 11/04/17
 * Time: 16:07
 */

namespace Hph\Model;


class ProgrammationManager extends \Hph\Db
{
    public function getArtists()
    {
        $req = "SELECT * FROM artist JOIN concert ON artist.id=concert.artist_id WHERE status = 'programmed' OR status = 'canceled'";
        return $this->dBQuery($req, 'Artist');
    }


    public function getArtistsPlace($idLieux)
    {
        $req = " SELECT * FROM artist JOIN concert ON artist.id=concert.artist_id WHERE (status = 'programmed' OR status = 'canceled') AND concert.place_id=$idLieux";
        return $this->dBQuery($req, 'Artist');
    }


    public function getArtistsSoir($jour)
    {
        $req = " SELECT * FROM artist JOIN concert ON artist.id=concert.artist_id WHERE (status = 'programmed' OR status = 'canceled') AND concert.concert_start LIKE '2017-09-$jour%'";
        return $this->dBQuery($req, 'Artist');
    }


    public function getArtistsLocal($local)
    {
        $req = " SELECT * FROM artist JOIN concert ON artist.id=concert.artist_id WHERE (status = 'programmed' OR status = 'canceled') AND artist.local=$local";
        return $this->dBQuery($req, 'Artist');
    }


}