<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 24/04/17
 * Time: 15:59
 */

namespace Hph;


class DateValidator
{
    private $date;
    private $required;
    public function validate()
    {
        if($this->required==1&&$this->date==''){
            return 10;
        }
        if(\DateTime::createFromFormat('Y-m-d H:i:s', $this->date) !== false){
            return true;
        }
        return 7;
    }
    public function __construct($date, $required = 1)
    {
        $this->setDate($date);
        $this->setRequired($required);
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param mixed $required
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }


}