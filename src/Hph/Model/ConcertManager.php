<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 13:37
 */

namespace Hph\Model;

use Hph\DateValidator;


class ConcertManager extends \Hph\Db
{
    public function getConcerts()
    {
        $req = "SELECT concert.id, concert.concert_start, concert.concert_end, concert.artist_id, concert.place_id, 
concert.status, concert.showcase, place.name as place_name, artist.name as artist_name FROM concert 
JOIN artist ON concert.artist_id=artist.id 
JOIN place ON concert.place_id=place.id";
        return $this->dBQueryWoFetchStyle($req);
    }

    public function addConcert($post)
    {
        if (!isset($post['showcase'])) {
            $post['showcase'] = 0;
        }
        $vStart = new DateValidator($post['start']);
        $rStart = $vStart->validate();
        if($rStart!==true){
            return $rStart;
        }
        $vEnd = new DateValidator($post['start']);
        $rEnd = $vEnd->validate();
        if($rEnd!==true){
            return $rEnd;
        }

        $sql = "INSERT INTO concert VALUES (NULL, '" . $post['start'] . "', '" . $post['end'] . "', '" . $post['artist'] . "', '" . $post['place'] . "', '" . $post['status'] . "', '" . $post['showcase'] . "')";
        return $this->getDb()->exec($sql);
    }

    public function updateConcert($post)
    {
        if (!isset($post['showcase'])) {
            $post['showcase'] = 0;
        }
        $vStart = new DateValidator($post['start']);
        $rStart = $vStart->validate();
        if($rStart!==true){
            return $rStart;
        }
        $vEnd = new DateValidator($post['start']);
        $rEnd = $vEnd->validate();
        if($rEnd!==true){
            return $rEnd;
        }

        $sql = "UPDATE concert SET concert_start = '" . $post['start'] . "', concert_end = '" . $post['end'] . "', artist_id = '" . $post['artist'] . "', place_id = '" . $post['place'] . "', status = '" . $post['status'] .
                "', showcase = '" . $post['showcase'] . "' WHERE id = '" . $post['id'] . "'";

        return $this->getDb()->exec($sql);
    }

    public function deleteConcert($id)
    {
        $sql = "DELETE FROM concert WHERE id=" . $id;
        return $this->getDb()->exec($sql);
    }

}