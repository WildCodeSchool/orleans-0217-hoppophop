<?php
require_once '../vendor/autoload.php';
require_once '../src/Hph/connect.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}


if ($page == 'home') {
    $home = new Hph\Controller\HomeController('back');
    $render = $home->render();


} else if ($page == 'artist') {
    $artist = new Hph\Controller\ProgrammationController('back');
    $render = $artist->listAllArtist();
} else if ($page == 'addArtist') {
    $addArtist = new Hph\Model\ProgrammationManager();
    $tagManager = new Hph\Model\TagManager();
    if ($addArtist->addArtist($_POST, $_FILES)) {
        $id = $addArtist->getDb()->lastInsertId();
        $tags = trim($_POST['tags']);
        $tags = explode(',', $tags);
        foreach ($tags as $tag) {
            $tagManager->insertTag($tag, $id);
        }
        header('Location: admin.php?page=artist');
    }
} else if ($page == 'updateArtist') {
    $updateArtist = new Hph\Model\ProgrammationManager();
    if ($updateArtist->updateArtist($_POST, $_FILES)) {
        header('Location: admin.php?page=artist');
    }
} else if ($page == 'deleteArtist') {
    $deleteArtist = new Hph\Model\ProgrammationManager();
    if ($deleteArtist->deleteArtist($_POST['id'])) {
        header('Location: admin.php?page=artist');
    }
}

else if ($page == 'concert') {
    $concert = new Hph\Controller\ConcertController('back');
    $render = $concert->listConcert();
} else if ($page == 'addConcert') {
    $addConcert = new Hph\Model\ConcertManager();
    if ($addConcert->addConcert($_POST, $_FILES)) {
        header('Location: admin.php?page=concert');
    }
} else if ($page == 'updateConcert') {
    $updateConcert = new Hph\Model\ConcertManager();
    if ($updateConcert->updateConcert($_POST, $_FILES)) {
        header('Location: admin.php?page=concert');
    }
} else if ($page == 'deleteConcert') {
    $deleteConcert = new Hph\Model\ConcertManager();
    if ($deleteConcert->deleteConcert($_POST['id'])) {
        header('Location: admin.php?page=concert');
    }
}





else if ($page == 'place') {
    $place = new Hph\Controller\PlaceController('back');
    $render = $place->render();
} else if ($page == 'addPlace') {
    $addPlace = new Hph\Model\PlaceManager();
    if ($addPlace->addPlace($_POST, $_FILES)) {
        header('Location: admin.php?page=place');
    }
} else if ($page == 'updatePlace') {
    $updatePlace = new Hph\Model\PlaceManager();
    if ($updatePlace->updatePlace($_POST, $_FILES)) {
        header('Location: admin.php?page=place');
    }
} else if ($page == 'deletePlace') {
    $deletePlace = new Hph\Model\PlaceManager();
    if ($deletePlace->deletePlace($_POST['id'])) {
        header('Location: admin.php?page=place');
    }
} else if ($page == 'news') {
    $news = new Hph\Controller\NewsController('back');
    $render = $news->render();
} else if ($page == 'addNews') {
    $addNews = new Hph\Model\NewsManager();
    if ($addNews->addNews($_POST, $_FILES)) {
        header('Location: admin.php?page=news');
    }
} else if ($page == 'updateNews') {
    $updateNews = new Hph\Model\NewsManager();
    if ($updateNews->updateNews($_POST, $_FILES)) {
        header('Location: admin.php?page=news');
    }
} else if ($page == 'deleteNews') {
    $deleteNews = new Hph\Model\NewsManager();
    if ($deleteNews->deleteNews($_POST['id'])) {
        header('Location: admin.php?page=news');
    }
} else if ($page == 'food') {
    $food = new Hph\Controller\FoodController('back');
    $render = $food->render();
} else if ($page == 'addFood') {
    $addFood = new Hph\Model\FoodManager();
    if ($addFood->addFood($_POST, $_FILES)) {
        header('Location: admin.php?page=food');
    }
} else if ($page == 'updateFood') {
    $updateFood = new Hph\Model\FoodManager();
    if ($updateFood->updateFood($_POST, $_FILES)) {
        header('Location: admin.php?page=food');
    }
} else if ($page == 'deleteFood') {
    $deleteFood = new Hph\Model\FoodManager();
    if ($deleteFood->deleteFood($_POST['id'])) {
        header('Location: admin.php?page=food');
    }
} else if ($page == 'partner') {
    $partner = new Hph\Controller\PartnerController('back');
    $render = $partner->render();
} else if ($page == 'addPartner') {
    $addPartner = new Hph\Model\PartnerManager();
    if ($addPartner->addPartner($_POST, $_FILES)) {
        header('Location: admin.php?page=partner');
    }
} else if ($page == 'deletePartner') {
    $deletePartner = new Hph\Model\PartnerManager();
    if ($deletePartner->deletePartner($_POST['id'])) {
        header('Location: admin.php?page=partner');
    }
} else if ($page == 'sunday') {
    $sunday = new Hph\Controller\DimaorlController('back');
    $render = $sunday->render();
} else if ($page == 'addSunday') {
    $addSunday = new Hph\Model\SundayManager();
    if ($addSunday->addSunday($_POST, $_FILES)) {
        header('Location: admin.php?page=sunday');
    }
} else if ($page == 'updateSunday') {
    $updateSunday = new Hph\Model\SundayManager();
    if ($updateSunday->updateSunday($_POST, $_FILES)) {
        header('Location: admin.php?page=sunday');
    }
} else if ($page == 'deleteSunday') {
    $deleteSunday = new Hph\Model\SundayManager();
    if ($deleteSunday->deleteSunday($_POST['id'])) {
        header('Location: admin.php?page=sunday');
    }
} else {
    $home = new Hph\Controller\HomeController('back');
    $render = $home->render();
}
echo $render;