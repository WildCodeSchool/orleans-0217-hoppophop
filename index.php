<?php
require_once 'vendor/autoload.php';
require_once 'controller/HomeController.php';
$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array('cache' => false));

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else {
    $page = 'home';
}
if($page == 'home'){
    $home = new \hph\controller\HomeController();
    $home->render($twig);
}else if($page == 'programmation'){
    include('views/programmation.php');
}else if($page == 'artiste'){
    include('views/artiste.php');
}else if($page == 'planning'){
    $planning = new \hph\controller\PlanningController();
    $planning->render($twig);
}else if($page == 'billetterie'){
    include('views/billetterie.php');
}else if($page == 'cashless'){
    include('views/cashless.php');
}else if($page == 'food'){
    include('views/food.html.twig');
}else if($page == 'lieux'){
    include('views/lieux.html.twig');
}else if($page == 'benevolat'){
    include('views/benevolat.php');
}else if($page == 'venir'){
    include('views/venir.php');
}else if($page == 'dimaorl'){
    include('views/dimaorl.php');
}else if($page == 'partner'){
    include('views/partner.php');
}else if($page == 'contact'){
    include('views/contact.php');
}
?>