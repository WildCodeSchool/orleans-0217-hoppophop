<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 21:05
 */

namespace Hph\Controller;
use Hph\Model\SundayManager;

class DimaorlController
{
    public function getSunday()
    {
        $places = new SundayManager();
        return $places -> getSunday();
    }
    public function render($twig)
    {
        $sunday = $this->getSunday();
        echo $twig->load('dimaorl.html.twig')->render(['sundays'=>$sunday]);
    }
}