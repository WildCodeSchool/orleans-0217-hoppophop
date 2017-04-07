<?php
/**
 * Created by PhpStorm.
 * User: wilder1
 * Date: 05/04/17
 * Time: 12:00
 */

namespace HPH\model;


class Concert
{

private $id;
private $hour;
private $day;
private $artist_id;
private $concert_hall_id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param mixed $hour
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
    }

    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param mixed $day
     */
    public function setDay($day)
    {
        $this->day = $day;
    }

    /**
     * @return mixed
     */
    public function getArtistId()
    {
        return $this->artist_id;
    }

    /**
     * @param mixed $artist_id
     */
    public function setArtistId($artist_id)
    {
        $this->artist_id = $artist_id;
    }

    /**
     * @return mixed
     */
    public function getConcertHallId()
    {
        return $this->concert_hall_id;
    }

    /**
     * @param mixed $concert_hall_id
     */
    public function setConcertHallId($concert_hall_id)
    {
        $this->concert_hall_id = $concert_hall_id;
    }



}