<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 15:32
 */

namespace Hph\Model;
use Symfony\Component\Validator\Constraints as Assert;

class Partner
{
    private $id;
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
    private $img_partner;
    /**
     * @Assert\Url(
     *    message = "le lien '{{ value }}' n'est pas un lien valide",
     * )
     */
    private $url;
    private $footer;
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
    public function getImgPartner()
    {
        return $this->img_partner;
    }
    /**
     * @param mixed $img_partner
     */
    public function setImgPartner($img_partner)
    {
        $this->img_partner = $img_partner;
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
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * @param mixed $footer
     */
    public function setFooter($footer)
    {
        $this->footer = $footer;
    }

}