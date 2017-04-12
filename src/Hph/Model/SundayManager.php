<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 13:52
 */

namespace Hph\Model;


class SundayManager extends \Hph\Db
{
    public function getSunday()
    {
        $req = "SELECT * FROM sunday";
        return $this->render($req, 'Sunday');
    }
}