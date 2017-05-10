<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 21:05
 */

namespace Hph\Controller;
use Hph\Model\SundayManager;
use Hph\Model\PartnerManager;

class DimaorlController extends ControllerDefault
{
    public function getSunday()
    {
        $places = new SundayManager();
        return $places -> getSunday();
    }
    public function render()
    {
        $sundays = $this->getSunday();
        return $this->twig->render('dimaorl.html.twig', ['sundays'=>$sundays, 'error'=>$_GET['error']]);
    }
}