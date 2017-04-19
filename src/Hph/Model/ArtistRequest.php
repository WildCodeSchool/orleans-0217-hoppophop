<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 10/04/17
 * Time: 23:51
 */

namespace Hph\Model;


class ArtistRequest extends \Hph\Db
{
    public function findOne($id)
    {
        $req = "SELECT * FROM artist WHERE id = $id";
        return $this->dBQuery($req, 'Artist');

    }
    // appelle ton modèle $tags = Tag->findArtistTags($artist_id); // select * from tags where artist_id = $artist_id;
    // affichage de la page qui affiche un seul artiste 'tags'=>$tags
   public function findArtistTag($artist_id)
   {
        $req = "SELECT tag.name FROM tag WHERE artist_id = $artist_id";
        return $this->dBQuery($req, 'Tag');

   }
//   public function findProg($artist_id)
//   {
//       $req = "SELECT * FROM concert JOIN place ON place.id = concert.place_id WHERE artist_id = $artist_id";
//       return $this->dBQuery($req, 'Concert');
//   }
    public function findArtistHour($artist_id)
    {
        $req = "SELECT concert.concert_start, concert.concert_end FROM concert WHERE artist_id = $artist_id";
        return $this->dBQuery($req, 'Concert');
    }
    public function findArtistPlace($place_id)
    {

    }
}

