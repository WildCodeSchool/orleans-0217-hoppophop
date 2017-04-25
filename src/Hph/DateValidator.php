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

    public function validate()
    {
        if(\DateTime::createFromFormat('Y-m-d H:i:s', $this->date) !== false){
            return true;
        }
        return 7;
    }
    public function __construct($date)
    {
        $this->setDate($date);
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


}