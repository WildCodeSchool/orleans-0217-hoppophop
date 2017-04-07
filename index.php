<?php
include('views/header.php');
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else {
    $page = 'home';
}
if($page == 'home'){
    ?>
    <div class="news-top text-center font-default" id="breaking-news">
        <h2 class="news-topText">
            Attention, information de dernière minute : La Jungle ne pourra pas être présent.
            <a class="cross glyphicon glyphicon-remove news-remove" onclick="$('#breaking-news').addClass('delete')"></a>
        </h2>
    </div>
    <?php
    include('views/home.php');
}else if($page == 'programmation'){
    include('views/programmation.php');
}else if($page == 'artiste'){
    include('views/artiste.php');
}else if($page == 'planning'){
    include('views/planning.php');
}else if($page == 'billetterie'){
    include('views/billetterie.php');
}else if($page == 'cashless'){
    include('views/cashless.php');
}else if($page == 'food'){
    include('views/food.php');
}else if($page == 'lieux'){
    include('views/lieux.php');
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
include('views/footer.php');
?>