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
    $updatePlace = new Hph\Model\PlaceManager('back');
    if($updatePlace->updatePlace($_POST, $_FILES)){
        header('Location: admin.php?page=place');
    }
}else if($page == 'deletePlace'){
    $deletePlace = new Hph\Model\PlaceManager('back');
    if($deletePlace->deletePlace($_POST['id'])){
        header('Location: admin.php?page=place');
    }
}else if($page == 'news') {
    $news = new Hph\Controller\NewsController('back');
    $render = $news->render();
}else if($page == 'addNews'){
    $addNews = new Hph\Model\NewsManager('back');
    if($addNews->addNews($_POST, $_FILES)){
        header('Location: admin.php?page=news');
    }
}else if($page == 'updateNews'){
    $updateNews = new Hph\Model\NewsManager('back');
    if($updateNews->updateNews($_POST, $_FILES)){
        header('Location: admin.php?page=news');
    }
}else if($page == 'deleteNews'){
    $deleteNews = new Hph\Model\NewsManager('back');
    if($deleteNews->deleteNews($_POST['id'])){
        header('Location: admin.php?page=news');
    }
}else{
    $home = new Hph\Controller\HomeController('back');
    $render = $home->render();
}
echo $render;