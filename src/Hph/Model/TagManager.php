<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 24/04/17
 * Time: 17:11
 */

namespace Hph\Model;

/*
 * Permet de :
 * - Ajouter un tag à un artiste (insertTag)
 */

class TagManager extends \Hph\Db
{
    /**
     * Insert un tag dans la bdd
     *
     * @param $tag
     * @param $artist_id
     * @return bool
     */
    public function insertTag($tag, $artist_id) : bool
    {
        $req = "INSERT INTO tag(artist_id, name) VALUE (:artist_id, TRIM( :name ))";
        $prep = $this->getDb()->prepare($req);

        $prep->bindValue(':artist_id', $artist_id);
        $prep->bindValue(':name', $tag);
        return $prep->execute();
    }
}
