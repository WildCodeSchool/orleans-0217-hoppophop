<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 10/04/17
 * Time: 23:51
 */

namespace Hph\Model;

/*
 * Permet de récupérer les infos sur :
 * - tous les artistes (getArtists)
 * - un artiste (findOne)
 * - les tags (mots-clés) d'un artiste (findArtistTag)
 * - les concerts (dates, horaires, lieux) d'un artiste
 */
class ArtistManager extends \Hph\Db
{
    public function getArtists()
    {
        $req = "SELECT * FROM artist";
        return $this->dBQuery($req, 'Artist');
    }
    public function findOne($id)
    {
        $req = "SELECT * FROM artist WHERE id = $id";
        return $this->dBQuery($req, 'Artist');

    }

    public function findArtistTag($artist_id)
    {
        $req = "SELECT tag.name FROM tag WHERE artist_id = $artist_id";
        return $this->dBQuery($req, 'Tag');

    }

    public function findProg($artist_id)
    {
        $req = "SELECT * FROM concert JOIN place ON place.id = concert.place_id WHERE artist_id = $artist_id ORDER BY concert.concert_start ASC";
        return $this->dBFetchAll($req);
    }

}

