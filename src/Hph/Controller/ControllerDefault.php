<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 12/04/17
 * Time: 15:39
 */

namespace Hph\Controller;


class ControllerDefault
{
    protected $twig;
    public function __construct($type = 'front')
    {
        if($type=='front'){
            $loader = new \Twig_Loader_Filesystem('src/Hph/View/front/');
        }else{
            $loader = new \Twig_Loader_Filesystem('../src/Hph/View/back/');
        }
        $this->twig = new \Twig_Environment($loader, array('debug' => true,'cache' => false));
        $this->twig->addExtension(new \Twig_Extension_Debug());
        $this->twig->addExtension(new \Twig_Extensions_Extension_Intl());
    }
}