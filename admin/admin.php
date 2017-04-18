<?php
require_once '../vendor/autoload.php';
require_once '../src/Hph/connect.php';

if(isset($_GET['page'])) {
    $page = $_GET['page'];
}else{
    $page = 'home';
}


if($page == 'home') {
    $home = new Hph\Controller\HomeController('back');
    $render = $home->renderAdmin();
}else if($page == 'place') {
    $place = new Hph\Controller\PlaceController('back');
    $render = $place->renderAdmin();
}else if($page == 'addPlace'){
    $place = new Hph\Controller\PlaceForm('back');
    $render = $place->addPlace();
}
echo $render;