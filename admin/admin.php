<?php
require_once '../vendor/autoload.php';
require_once '../src/Hph/connect.php';

$loader = new Twig_Loader_Filesystem('../src/Hph/View/back');
$twig = new Twig_Environment($loader, array('cache' => false));

if(isset($_GET['page'])) {
    $page = $_GET['page'];
}else {
    $page = 'home';
}

if($page == 'home') {
    $home = new Hph\Controller\HomeController;
    $home->renderAdmin($twig);
}