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
   public function findArtistTags()
   {
        $req = "SELECT * FROM tag WHERE artist_id = $artist_id";
        return $this->dBQuery($req, 'Tag');

   }

}

