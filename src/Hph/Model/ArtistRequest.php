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
    public function showArtist($id)
    {
        $req = "SELECT * FROM artist WHERE id = $id";
        return $this->render($req, 'Artist');

    }

}

