<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 08:57
 */

namespace Hph\Model;


class Food
{
    private $id;
    private $name;
    private $img_eat;
    private $content;

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
    public function getImgEat()
    {
        return $this->img_eat;
    }

    /**
     * @param mixed $img_eat
     */
    public function setImgEat($img_eat)
    {
        $this->img_eat = $img_eat;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
}