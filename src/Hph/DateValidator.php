<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 24/04/17
 * Time: 15:59
 */

namespace Hph;

/*
 * Validateur de date :
 * - Le constructeur prend deux paramêtres : $date (la valeur du champ que l'on test) et $required (le champ est il requis ou non)
 *
 * La méthode validate vérifie la validité de la date :
 * - Si la date est requise et que la donnée envoyée est vide, le validateur retourne le code d'erreur 10 (champ requis non remplis)
 * - Si la date n'est pas au format Y-m-d H:i:s, le validateur retourne le code d'erreur 7 (format de date incorrect)
 *
 */
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