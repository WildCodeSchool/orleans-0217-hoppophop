<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 24/04/17
 * Time: 11:37
 */

namespace Hph;


class TextValidator
{
    private $content;
    private $length;

    public function length()
    {
        if(strlen($this->content)<=$this->length||$this->length==0){
            return true;
        }
        return false;
    }
    public function __construct($content, $length = 0)
    {
        $this->setContent($content);
        $this->setLength($length);
    }
    public function validate()
    {
        if(is_string($this->content)){
            if($this->length()){
                return true;
            }
            return 3;
        }
        return 2;
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

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }
}