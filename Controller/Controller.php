<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 06/04/17
 * Time: 17:33
 */

namespace Hph\controller;


class Controller
{
    public function render($path, $param){

        extract($param);

        

        require '../src/view/'.$path;

        return $param;

    }

}