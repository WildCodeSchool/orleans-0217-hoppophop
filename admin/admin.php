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
    $render = $home->render();
}else if($page == 'place') {
    $place = new Hph\Controller\PlaceController('back');
    $render = $place->render();
}else if($page == 'addPlace'){
    $addPlace = new Hph\Model\PlaceManager('back');
    if($addPlace->addPlace($_POST, $_FILES)){
        header('Location: admin.php?page=place');
    }
}else if($page == 'updatePlace'){
    $addPlace = new Hph\Model\PlaceManager('back');
    if($addPlace->updatePlace($_POST, $_FILES)){
        header('Location: admin.php?page=place');
    }
}else if($page == 'deletePlace'){
    $addPlace = new Hph\Model\PlaceManager('back');
    if($addPlace->deletePlace($_POST['id'])){
        header('Location: admin.php?page=place');
    }
}else{
    $home = new Hph\Controller\HomeController('back');
    $render = $home->render();
}
echo $render;