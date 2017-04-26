<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 24/04/17
 * Time: 15:00
 */

namespace Hph;


class ImgValidator
{
    private $img;
    private $ext;
    private $width;
    private $height;
    private $size;
    const EXT = array('png','gif','jpg','jpeg');
    const WIDTH = 500;
    const HEIGHT = 450;
    const SIZE = 1000000;

    public function validate()
    {
        if(in_array($this->ext, self::EXT)){
            if($this->width<=self::WIDTH&&$this->height<=self::HEIGHT){
                if($this->size<=self::SIZE){
                    return true;
                }
                return 6;
            }
            return 5;
        }
        return 4;
    }
    public function __construct($img)
    {
        $this->setImg($img);
        $this->setExt(pathinfo($img['img']['name'], PATHINFO_EXTENSION));
        $data = getimagesize($img['img']['tmp_name']);
        $this->setWidth($data[0]);
        $this->setHeight($data[1]);
        $this->setSize(filesize($img['img']['tmp_name']));
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * @param mixed $ext
     */
    public function setExt($ext)
    {
        $this->ext = $ext;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

}