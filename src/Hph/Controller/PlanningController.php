<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 07/04/17
 * Time: 16:20
 */

namespace hph\controller;


class PlanningController
{
    public function render ($twig)
    {
        $template = $twig->load('planning.html.twig');
        echo $template->render();
    }
}