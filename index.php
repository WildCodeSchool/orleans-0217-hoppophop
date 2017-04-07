<?php
require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('src/HPH/views');
$twig = new Twig_Environment($loader, array('cache' => false));
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else {
    $page = 'home';
}


if($page == 'home'){
    $home = new HPH\controller\HomeController();
    $home->render($twig);
}else if($page == 'programmation'){
    include('src/HPH/views/programmation.php');
}else if($page == 'artiste'){
    include('src/HPH/views/artiste.php');
}else if($page == 'planning'){
    include('src/HPH/views/planning.php');
}else if($page == 'billetterie'){
    include('src/HPH/views/billetterie.php');
}else if($page == 'cashless'){
    include('src/HPH/views/cashless.php');
}else if($page == 'food'){
    $food = new \hph\controller\FoodController();
    $food->render($twig);
}else if($page == 'place'){
    $place = new \hph\controller\PlaceController();
    $place->render($twig);
}else if($page == 'benevolat'){
    include('src/HPH/views/benevolat.php');
}else if($page == 'venir'){
    include('src/HPH/views/venir.php');
}else if($page == 'dimaorl'){
    include('src/HPH/views/dimaorl.php');
}else if($page == 'partner'){
    include('src/HPH/views/partner.php');
}else if($page == 'contact'){
    include('src/HPH/views/contact.php');
}
?>