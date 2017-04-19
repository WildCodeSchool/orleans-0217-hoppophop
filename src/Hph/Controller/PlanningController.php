<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 07/04/17
 * Time: 16:20
 */

namespace Hph\controller;


class PlanningController extends ControllerDefault
{
    public function render()
    {
        return $this->twig->render('planning.html.twig', ['places'=>$places, 'showcases'=>$showcase]);
    }
}