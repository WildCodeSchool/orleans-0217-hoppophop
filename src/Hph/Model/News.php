<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 11/04/17
 * Time: 10:40
 */

namespace HPH\Model;
use Symfony\Component\Validator\Constraints as Assert;

class News
{
    private $id;
    /**
     * @var string
     *
     * @Assert\Length(
     *      min = 2,
     *      max = 200,
     *      minMessage = "Le titre d'une news doit comporter au minimum {{ limit }} caractères",
     *      maxMessage = "Le titre d'une news doit comporter au maximum {{ limit }} caractères"
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
    private $img_news;
    /**
     * @Assert\NotBlank()
     */
    private $text;
    private $breaking_news;

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
    public function getImgNews()
    {
        return $this->img_news;
    }

    /**
     * @param mixed $img_news
     */
    public function setImgNews($img_news)
    {
        $this->img_news = $img_news;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getBreakingNews()
    {
        return $this->breaking_news;
    }

    /**
     * @param mixed $breaking_news
     */
    public function setBreakingNews($breaking_news)
    {
        $this->breaking_news = $breaking_news;
    }

}