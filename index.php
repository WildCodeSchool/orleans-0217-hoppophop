<?php
require_once 'vendor/autoload.php';
require_once 'src/Hph/connect.php';


if(isset($_GET['page'])){

    $page = $_GET['page'];
}else {
    $page = 'home';
}

if($page == 'home') {
    $home = new Hph\Controller\HomeController;
    $home->render($twig);


}else if($page == 'programmation'){
    $page = new Hph\Controller\ProgrammationController();
    $page->render($twig);
}else if($page == 'artist'){
    $artiste = new Hph\Controller\ArtistController();
    $render = $artiste->showArtist($_GET['id']);
}else if($page == 'planning'){

    $planning = new \Hph\Controller\PlanningController();
    $planning->render($twig);
}else if($page == 'billetterie') {
    $ticket = new Hph\Controller\TicketController();
    $ticket->render($twig);
}else if($page == 'cashless') {
    $cashless = new \Hph\Controller\CashlessController();
    $cashless->render($twig);
}else if($page == 'food') {
    $food = new Hph\Controller\FoodController();
    $food->render($twig);
}else if($page == 'place') {
    $place = new Hph\Controller\PlaceController();
    $place->render($twig);
}else if($page == 'volunteer') {
    $volunteer = new Hph\Controller\VolunteerController();
    $volunteer->render($twig);
}else if($page == 'benevolat') {
    $benevolat = new Hph\Controller\BenevolatController();
    $benevolat->render($twig);
}else if($page == 'transport') {
    $transport = new Hph\Controller\TransportController();
    $transport->render($twig);
}else if($page == 'dimaorl') {
    $dimaorl = new Hph\Controller\DimaorlController();
    $dimaorl->render($twig);
}else if($page == 'partner') {
    $partner = new Hph\Controller\PartnerController();
    $partner->render($twig);

}else if($page == 'contact') {
    $contact = new Hph\Controller\ContactController();
    $contact->render($twig);
}else if($page == 'news') {
    $news = new Hph\Controller\NewsController();
    $news->render($twig);
}else if($page == 'newsOne') {
    $newsOne = new Hph\Controller\NewsOneController();
    $newsOne->render($twig, $_GET['id']);
}



echo $render;

