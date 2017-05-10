<?php
require_once '../vendor/autoload.php';
require_once '../src/Hph/connect.php';

if(!isset($_GET['error'])){
    $_GET['error'] = 1;
}

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else {
    $page = 'home';
}

if($page == 'home') {
    $home = new Hph\Controller\HomeController();
    $render = $home->render();
}else if($page == 'programmation'){
    $page = new Hph\Controller\ProgrammationController();
    $render = $page->listArtist();
}else if($page == 'artist'){
    $artiste = new Hph\Controller\ArtistController();
    $render = $artiste->showArtist($_GET['id']);
}else if($page == 'planning'){
    $planning = new \Hph\Controller\PlanningController();
    $render = $planning->showPlanning();
}else if($page == 'ticket') {
    $ticket = new Hph\Controller\TicketController();
    $render = $ticket->render();
}else if($page == 'cashless') {
    $cashless = new \Hph\Controller\CashlessController();
    $render = $cashless->render();
}else if($page == 'food') {
    $food = new Hph\Controller\FoodController();
    $render = $food->render();
}else if($page == 'place') {
    $place = new Hph\Controller\PlaceController();
    $render = $place->render();
}else if($page == 'volunteer') {
    $volunteer = new Hph\Controller\VolunteerController();
    $render = $volunteer->render();
}else if($page == 'transport') {
    $transport = new Hph\Controller\TransportController();
    $render = $transport->render();
}else if($page == 'dimaorl') {
    $dimaorl = new Hph\Controller\DimaorlController();
    $render = $dimaorl->render();
}else if($page == 'partner') {
    $partner = new Hph\Controller\PartnerController();
    $render = $partner->render();
}else if($page == 'contact') {
    $contact = new Hph\Controller\ContactController();
    $render = $contact->render();
}else if($page == 'news') {
    $news = new Hph\Controller\NewsController();
    $render = $news->render();
}else if($page == 'newsOne') {
    $newsOne = new Hph\Controller\NewsOneController();
    $render = $newsOne->render($_GET['id']);
}else if($page == 'mail'){
    $mail = new Hph\Controller\ContactController();
    $render = $mail->mail($_POST);
}else {
    $home = new Hph\Controller\HomeController();
    $render = $home->render();
}
echo $render;

