<?php
/**
 * Created by PhpStorm.
 * User: wilder1
 * Date: 11/04/17
 * Time: 16:07
 */

namespace Hph\Model;


class ProgrammationManager extends \Hph\Db
{
    public function getArtists($limit)
    {
        $req = "SELECT * FROM artist LIMIT 0, $limit";
        return $this->dBQuery($req, 'Artist');
    }
}