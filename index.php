<?php
require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('src/Hph/View');
$twig = new Twig_Environment($loader, array('cache' => false));
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else {
    $page = 'home';
}
if($page == 'home'){
    $home = new Hph\Controller\HomeController();
    $home->render($twig);
}else if($page == 'programmation'){
    include('src/Hph/View/programmation.php');
}else if($page == 'artiste'){
    include('src/Hph/View/artiste.php');
}else if($page == 'planning'){
    $planning = new \hph\controller\PlanningController();
    $planning->render($twig);
}else if($page == 'billetterie'){
    include('src/Hph/View/billetterie.php');
}else if($page == 'cashless'){
    include('src/Hph/View/cashless.php');
}else if($page == 'food'){
    $food = new Hph\Controller\FoodController();
    $food->render($twig);
}else if($page == 'place'){
    $place = new Hph\Controller\PlaceController();
    $place->render($twig);
}else if($page == 'benevolat'){
    include('src/Hph/View/benevolat.php');
}else if($page == 'transport'){
    $transport = new Hph\Controller\TransportController();
    $transport->render($twig);
}else if($page == 'dimaorl'){
    include('src/Hph/View/dimaorl.php');
}else if($page == 'partner'){
    include('src/Hph/View/partner.php');
}else if($page == 'contact'){
    include('src/Hph/View/contact.php');
}
?>