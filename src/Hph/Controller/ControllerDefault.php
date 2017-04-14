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
    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem('src/Hph/View/');
        $this->twig = new \Twig_Environment($loader, array('debug' => true,'cache' => false));
        $this->twig->addExtension(new \Twig_Extension_Debug());
    }
}