<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 12/04/17
 * Time: 09:02
 */

namespace Hph\Model;


class FoodManager extends \Hph\Db
{
    public function getFood()
    {
        $req = "SELECT eat.id, eat.name, eat.img_eat, eat.content, eat_place.eat_id, eat_place.place_id, eat_place.start, eat_place.end, place.id as place_id, place.name as place_name
FROM eat 
JOIN eat_place ON eat.id=eat_place.eat_id 
JOIN place ON place.id=eat_place.place_id
";
        return $this->render($req, 'Food');
    }
}