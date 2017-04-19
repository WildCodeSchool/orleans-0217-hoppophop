<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: wilder9
 * Date: 11/04/17
 * Time: 17:08
 */

namespace Hph\Model;

class Place
{
    private $id;
    private $name;
    private $url;
    private $img_place;
    private $start;
    private $end;
    private $showcase;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getImgPlace()
    {
        return $this->img_place;
    }

    public function setImgPlace($img_place)
    {
        $this->img_place = $img_place;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function setStart($start)
    {
        $this->start = $start;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function setEnd($end)
    {
        $this->end = $end;
    }

    public function getShowcase()
    {
        return $this->showcase;
    }

    public function setShowcase($showcase)
    {
        $this->showcase = $showcase;
    }
}