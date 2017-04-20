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
    private $concert_start;
    private $concert_end;
    private $artist_id;
    private $place_id;
    private $status;
    private $showcase;

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
    public function getConcertStart()
    {
        return $this->concert_start;
    }

    /**
     * @param mixed $concert_start
     */
    public function setConcertStart($concert_start)
    {
        $this->concert_start = $concert_start;
    }

    /**
     * @return mixed
     */
    public function getConcertEnd()
    {
        return $this->concert_end;
    }

    /**
     * @param mixed $concert_end
     */
    public function setConcertEnd($concert_end)
    {
        $this->concert_end = $concert_end;
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
    public function getPlaceId()
    {
        return $this->place_id;
    }

    /**
     * @param mixed $place_id
     */
    public function setPlaceId($place_id)
    {
        $this->place_id = $place_id;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getShowcase()
    {
        return $this->showcase;
    }

    /**
     * @param mixed $showcase
     */
    public function setShowcase($showcase)
    {
        $this->showcase = $showcase;
    }

}