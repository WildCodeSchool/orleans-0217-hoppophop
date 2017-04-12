<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 09:00
 */

namespace Hph\Model;


class FoodPlace
{
    private $eat_id;
    private $place_id;
    private $start;
    private $end;

    /**
     * @return mixed
     */
    public function getEatId()
    {
        return $this->eat_id;
    }

    /**
     * @param mixed $eat_id
     */
    public function setEatId($eat_id)
    {
        $this->eat_id = $eat_id;
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
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param mixed $start
     */
    public function setStart($start)
    {
        $this->start = $start;
    }

    /**
     * @return mixed
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param mixed $end
     */
    public function setEnd($end)
    {
        $this->end = $end;
    }
}