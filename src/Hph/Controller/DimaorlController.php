<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 21:05
 */

namespace Hph\Controller;
use Hph\Model\SundayManager;

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
        if(isset($_GET['error'])){
            $error = $_GET['error'];
        }else{
            $error = 1;
        }
        return $this->twig->render('dimaorl.html.twig', ['sundays'=>$sundays, 'error'=>$error]);
    }
}