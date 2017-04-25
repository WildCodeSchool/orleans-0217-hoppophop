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
    private $type;

    public function length()
    {
        if(strlen($this->content)<=$this->length||$this->length==0){
            return true;
        }
        return false;
    }
    public function __construct($content, $length = 0, $type = 'string')
    {
        $this->setContent($content);
        $this->setLength($length);
        $this->setType($type);
    }
    public function validate()
    {
        if($this->type=='string'){
            if(is_string($this->content)){
                if($this->length()){
                    return true;
                }
                return 3;
            }
            return 2;
        }else{
            if (filter_var($this->content, FILTER_VALIDATE_URL) === FALSE) {
                return 8;
            }
            return true;
        }
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
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