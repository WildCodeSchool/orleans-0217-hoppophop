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
        $req = "SELECT * FROM artist JOIN concert ON artist.id=concert.artist_id WHERE (status = 'programmed' OR status = 'canceled') AND";
        return $this->dBQuery($req, 'Artist');
    }


    public function getArtistsPlace()
    {
        $req = " SELECT * FROM artist JOIN concert ON artist.id=concert.artist_id WHERE status = 'programmed' OR status = 'canceled'";
        return $this->dBQuery($req, 'Artist');
    }


    public function getArtistsSoir()
    {
        $req = " SELECT * FROM artist JOIN concert ON artist.id=concert.artist_id WHERE status = 'programmed' OR status = 'canceled'";
        return $this->dBQuery($req, 'Artist');
    }


    public function getArtistsLocal()
    {
        $req = " SELECT * FROM artist JOIN concert ON artist.id=concert.artist_id WHERE status = 'programmed' OR status = 'canceled'";
        return $this->dBQuery($req, 'Artist');
    }


}