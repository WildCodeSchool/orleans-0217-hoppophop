<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 13:51
 */

namespace Hph\Model;
use Symfony\Component\Validator\Constraints as Assert;

class Sunday
{
    private $id;
    /**
     * @var string
     *
     * @Assert\Length(
     *      min = 2,
     *      max = 200,
     *      minMessage = "Le titre d'une activité doit comporter au minimum {{ limit }} caractères",
     *      maxMessage = "Le titre d'une activité doit comporter au maximum {{ limit }} caractères"
     * )
     * @Assert\NotBlank()
     */
    private $title;
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
    private $img_sunday;
    /**
     * @Assert\NotBlank()
     */
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getImgSunday()
    {
        return $this->img_sunday;
    }

    /**
     * @param mixed $img_sunday
     */
    public function setImgSunday($img_sunday)
    {
        $this->img_sunday = $img_sunday;
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