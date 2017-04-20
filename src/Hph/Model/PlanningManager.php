<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 11/04/17
 * Time: 14:24
 */

namespace Hph\Model;


class PlanningManager extends \Hph\Db

{
    const STATUS_PROGRAMMED = 'programmed';
    const STATUS_CANCELED = 'canceled';

    public function getPlace()
    {
        $req = "SELECT * FROM place";
        $res = $this->getDb()->query($req);
        return $res->fetchAll(\PDO::FETCH_BOTH);
    }

    public function getArtist()
    {
        $req = "SELECT * FROM artist";
        $res = $this->getDb()->query($req);
        return $res->fetchAll(\PDO::FETCH_BOTH);
    }

    public function getConcert()
    {
        $req = "SELECT * FROM concert";
        $res = $this->getDb()->query($req);
        return $res->fetchAll(\PDO::FETCH_BOTH);
    }

    public function getConcertsToShowWoShowCase() : array
    {
        $req = "SELECT * FROM concert WHERE status IN (:prog , :cancel) AND showcase=0";
         $stmt = $this->getDb()->prepare($req);
         $stmt->bindValue(':prog', self::STATUS_PROGRAMMED);
         $stmt->bindValue(':cancel', self::STATUS_CANCELED);
         if(!$stmt->execute()) {
             throw new \Exception("Impossible d executer la requete SQL.");
         }
         $concerts = $stmt->fetchAll();
        return $concerts;
    }

    public function getShowCases() : array
    {
        $req = "SELECT * FROM concert WHERE status IN (:prog , :cancel) AND showcase=1";
        $stmt = $this->getDb()->prepare($req);
        $stmt->bindValue(':prog', self::STATUS_PROGRAMMED);
        $stmt->bindValue(':cancel', self::STATUS_CANCELED);
        if(!$stmt->execute()) {
            throw new \Exception("Impossible d executer la requete SQL.");
        }
        $showcases = $stmt->fetchAll();
        return $showcases;
    }
}