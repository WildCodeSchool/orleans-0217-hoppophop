<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 08:59
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getImgPlace()
    {
        return $this->img_place;
    }

    /**
     * @param mixed $img_place
     */
    public function setImgPlace($img_place)
    {
        $this->img_place = $img_place;
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