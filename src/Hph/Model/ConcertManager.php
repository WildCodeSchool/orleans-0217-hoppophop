<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 13:37
 */

namespace Hph\Model;

use Hph\DateValidator;
use PDO;

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
        if (filter_var($post['url'], FILTER_VALIDATE_URL) === FALSE) {
            return 8;
        }

        $query = "INSERT INTO concert VALUES (NULL, :start, :end, :artist, :place, :status, :showcase)";
        $prep = $this->getDb()->prepare($query);
        $prep->bindValue(':start', $post['start'], PDO::PARAM_STR);
        $prep->bindValue(':end', $post['end'], PDO::PARAM_STR);
        $prep->bindValue(':status', $post['status'], PDO::PARAM_STR);
        $prep->bindValue(':artist', $post['artist'], PDO::PARAM_INT);
        $prep->bindValue(':place', $post['place'], PDO::PARAM_INT);
        $prep->bindValue(':showcase', $post['showcase'], PDO::PARAM_INT);
        $result = $prep->execute();
        return $result;
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

        $query = "UPDATE concert SET concert_start = :start, concert_end = :end, artist_id = :artist, place_id = :place, status = :status, showcase = :showcase WHERE id = :id";
        $prep = $this->getDb()->prepare($query);
        $prep->bindValue(':id', $post['id'], PDO::PARAM_INT);
        $prep->bindValue(':start', $post['start'], PDO::PARAM_STR);
        $prep->bindValue(':end', $post['end'], PDO::PARAM_STR);
        $prep->bindValue(':status', $post['status'], PDO::PARAM_STR);
        $prep->bindValue(':artist', $post['artist'], PDO::PARAM_INT);
        $prep->bindValue(':place', $post['place'], PDO::PARAM_INT);
        $prep->bindValue(':showcase', $post['showcase'], PDO::PARAM_INT);
        $result = $prep->execute();
        return $result;
    }

    public function deleteConcert($id)
    {
        $sql = "DELETE FROM concert WHERE id=" . $id;
        return $this->getDb()->exec($sql);
    }

}