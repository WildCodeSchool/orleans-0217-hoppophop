<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 08:59
 */

namespace Hph\Model;
use Symfony\Component\Validator\Constraints as Assert;

class Place
{
    private $id;
    /**
     * @var string
     *
     * @Assert\Length(
     *      min = 2,
     *      max = 30,
     *      minMessage = "Le nom d'un lieu doit comporter au minimum {{ limit }} caractères",
     *      maxMessage = "Le nom d'un lieu doit comporter au maximum {{ limit }} caractères"
     * )
     * @Assert\NotBlank()
     */
    private $name;
    /**
     * @Assert\Url(
     *    message = "le lien '{{ value }}' n'est pas un lien valide",
     * )
     */
    private $url;
    /**
     * @var string
     *
     * @Assert\Length(
     *      min = 2,
     *      max = 255,
     *      minMessage = "Le nom d'une l'image doit comporter au minimum {{ limit }} caractères",
     *      maxMessage = "Le nom d'une l'image doit comporter au maximum {{ limit }} caractères"
     * )
     * @Assert\NotBlank()
     */
    private $img_place;
    /**
     * @Assert\DateTime()
     */
    private $start;
    /**
     * @Assert\DateTime()
     */
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