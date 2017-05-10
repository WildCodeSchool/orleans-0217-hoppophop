<?php
require_once '../../vendor/autoload.php';
require_once '../../src/Hph/connect.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}
if (!isset($_GET['error'])) {
    $_GET['error'] = 1;
}else if($_GET['error']==''){
    $_GET['error'] = 12;
}
if ($page == 'home') {
    $home = new Hph\Controller\HomeController('back');
    $render = $home->render();
}

else if ($page == 'artist') {
    var_dump("test");
    $artist = new Hph\Controller\ProgrammationController('back');
    $render = $artist->listAllArtist();
} else if ($page == 'addArtist') {
    $addArtist = new Hph\Model\ProgrammationManager();
    $result = $addArtist->addArtist($_POST, $_FILES);
    if($result==1){
        $tagManager = new Hph\Model\TagManager();
        $id = $addArtist->getDb()->lastInsertId();
        $tags = trim($_POST['tags']);
        $tags = explode(',', $tags);
        foreach ($tags as $tag) {
            $tagManager->insertTag($tag, $id);
        }
    }
    header('Location: index.php?page=artist&error='.$result.'');
} else if ($page == 'updateArtist') {
    $updateArtist = new Hph\Model\ProgrammationManager();
    $result = $updateArtist->updateArtist($_POST, $_FILES);
    header('Location: index.php?page=artist&error='.$result.'');
} else if ($page == 'updateArtist') {
    $updateArtist = new Hph\Model\ProgrammationManager();
    $result = $updateArtist->updateArtist($_POST, $_FILES);
    header('Location: index.php?page=artist&error='.$result.'');
} else if ($page == 'deleteArtist') {
    $deleteArtist = new Hph\Model\ProgrammationManager();
    $result = $deleteArtist->deleteArtist($_POST['id']);
    header('Location: index.php?page=artist&error='.$result.'');
}

else if ($page == 'concert') {
    $concert = new Hph\Controller\ConcertController('back');
    $render = $concert->listConcert();
} else if ($page == 'addConcert') {
    $addConcert = new Hph\Model\ConcertManager();
    $result = $addConcert->addConcert($_POST);
    header('Location: index.php?page=concert&error='.$result.'');
} else if ($page == 'updateConcert') {
    $updateConcert = new Hph\Model\ConcertManager();
    $result = $updateConcert->updateConcert($_POST);
    header('Location: index.php?page=concert&error='.$result.'');
} else if ($page == 'deleteConcert') {
    $deleteConcert = new Hph\Model\ConcertManager();
    $result = $deleteConcert->deleteConcert($_POST['id']);
    header('Location: index.php?page=concert&error='.$result.'');
}

else if ($page == 'place') {
    $place = new Hph\Controller\PlaceController('back');
    $render = $place->render();
} else if ($page == 'addPlace') {
    $addPlace = new Hph\Model\PlaceManager();
    $result = $addPlace->addPlace($_POST, $_FILES);
    header('Location: index.php?page=place&error='.$result.'');
} else if ($page == 'updatePlace') {
    $updatePlace = new Hph\Model\PlaceManager();
    $result = $updatePlace->updatePlace($_POST, $_FILES);
    header('Location: index.php?page=place&error='.$result.'');
} else if ($page == 'deletePlace') {
    $deletePlace = new Hph\Model\PlaceManager();
    $result = $deletePlace->deletePlace($_POST['id']);
    header('Location: index.php?page=place&error='.$result.'');
}

else if ($page == 'news') {
    $news = new Hph\Controller\NewsController('back');
    $render = $news->render();
} else if ($page == 'addNews') {
    $addNews = new Hph\Model\NewsManager();
    $result = $addNews->addNews($_POST, $_FILES);
    header('Location: index.php?page=news&error='.$result.'');
} else if ($page == 'updateNews') {
    $updateNews = new Hph\Model\NewsManager();
    $result = $updateNews->updateNews($_POST, $_FILES);
    header('Location: index.php?page=news&error='.$result.'');
} else if ($page == 'deleteNews') {
    $deleteNews = new Hph\Model\NewsManager();
    $result = $deleteNews->deleteNews($_POST['id']);
    header('Location: index.php?page=news&error='.$result.'');
}

else if ($page == 'food') {
    $food = new Hph\Controller\FoodController('back');
    $render = $food->render();
} else if ($page == 'addFood') {
    $addFood = new Hph\Model\FoodManager();
    $result = $addFood->addFood($_POST, $_FILES);
    header('Location: index.php?page=food&error='.$result.'');
} else if ($page == 'updateFood') {
    $updateFood = new Hph\Model\FoodManager();
    $result = $updateFood->updateFood($_POST, $_FILES);
    header('Location: index.php?page=food&error='.$result.'');
} else if ($page == 'deleteFood') {
    $deleteFood = new Hph\Model\FoodManager();
    $result = $deleteFood->deleteFood($_POST['id']);
    header('Location: index.php?page=food&error='.$result.'');
}

else if ($page == 'partner') {
    $partner = new Hph\Controller\PartnerController('back');
    $render = $partner->render();
} else if ($page == 'addPartner') {
    $addPartner = new Hph\Model\PartnerManager();
    $result = $addPartner->addPartner($_POST, $_FILES);
    header('Location: index.php?page=partner&error='.$result.'');
} else if ($page == 'deletePartner') {
    $deletePartner = new Hph\Model\PartnerManager();
    $result = $deletePartner->deletePartner($_POST['id']);
    header('Location: index.php?page=partner&error='.$result.'');
}

else if ($page == 'sunday') {
    $sunday = new Hph\Controller\DimaorlController('back');
    $render = $sunday->render();
} else if ($page == 'addSunday') {
    $addSunday = new Hph\Model\SundayManager();
    $result = $addSunday->addSunday($_POST, $_FILES);
    header('Location: index.php?page=sunday&error='.$result.'');
} else if ($page == 'updateSunday') {
    $updateSunday = new Hph\Model\SundayManager();
    $result = $updateSunday->updateSunday($_POST, $_FILES);
    header('Location: index.php?page=sunday&error='.$result.'');
} else if ($page == 'deleteSunday') {
    $deleteSunday = new Hph\Model\SundayManager();
    $result = $deleteSunday->deleteSunday($_POST['id']);
    header('Location: index.php?page=sunday&error='.$result.'');
}

else {
    $home = new Hph\Controller\HomeController('back');
    $render = $home->render();
}
echo $render;