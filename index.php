pho<?php
require('php/header.php');
$alert = 1;
if($alert==1){
    ?>
    <div class="news-top text-center font-default" id="breaking-news">
        <h2>Attention, information de dernière minute : La Jungle ne pourra pas être présent.<a class="cross" onclick="$('#breaking-news').addClass('delete')"><span class="glyphicon glyphicon-remove news-remove" aria-hidden="true"></span></a></h2>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <?php
}
?>

<div class="container text-center">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <img src="src/img/logo-only.png" alt="Logo du Festival" class="img-responsive logo-big">
            <br />
            <br />
        </div>
        <h1 class="separator-title font-dokyo">PROGRAMMATION</h1>
        <hr class="hr">
        <div class="separator-div">
            <a href="#" class="separator-content"><img src="src/img/programmation.png" class="img-responsive"></a>
        </div>
        <h1 class="separator-title font-dokyo">BILLETTERIE</h1>
        <hr class="hr">
        <div class="separator-div">
        </div>
        <h1 class="separator-title font-dokyo">ACTUALITES</h1>
        <hr class="hr">
        <div class="separator-div">
            <div class="container-fluid">
                <div class="row">
                    <?php
                    for($i=0;$i<3;$i++){
                        ?>
                        <div class="col-xs-12 col-xs-offset-0 col-sm-4">
                            <div class="content-div text-justify">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-8 col-xs-offset-2">
                                            <img src="src/img/chuck.png" class="img-responsive content-img">
                                            <h2 class="font-circula">La Jungle</h2>
                                            <hr class="hr">
                                            <p>Une six-cordes et un casio. Il n’en faut parfois pas plus pour faire péter le mercure et irriter les yeux de sueur après deux breaks et trois accords. Deux singes rouquins, un très grand et un plus petit, vous emmènent dans leur milieu naturel : La Jungle !</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br />
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('php/footer.php');
?>