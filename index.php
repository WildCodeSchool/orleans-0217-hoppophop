<?php
require('php/header.php');
?>
    <br/>
    <br/>
    <div class="container text-center">
        <div class="row">
            <?php
            $alert = 0;
            if($alert==1){
                ?>
                <div class="news-top text-center">
                    <h1>Attention, information de dernière minute</h1>
                    <p>La Jungle ne pourra pas être présent.</p>
                    <hr class="hr">
                </div>
                <?php
            }
            ?>
            <div class="col-xs-6 col-xs-offset-3">
                <img src="src/img/logo-only.png" alt="Logo du Festival" class="img-responsive logo-big">
                <br />
                <br />
            </div>
            <h1 class="separator-title font-dokyo">PROGRAMMATION</h1>
            <hr class="hr">
            <div class="separator-div text-justify">
                <?php
                $max = 30;
                $max1 = 29;
                for($i=0;$i<$max;$i++){
                    if($i%2==0&&$i!=$max1){
                        ?>
                        <p class="home-prog"><a href="php/artiste.php" class="home-link link-orange font-circula">Chuck Berry</a> <span class="orange">/</span></p>
                        <?php
                    }else if($i!=$max1){
                        ?>
                        <p class="home-prog"><a href="php/artiste.php" class="home-link link-turquoise font-circula">Chuck Berry</a> <span class="turquoise">/</span></p>
                        <?php
                    }else{
                        ?>
                        <p class="home-prog"><a href="php/artiste.php" class="home-link link-turquoise font-circula">Chuck Berry</a></p>
                        <?php
                    }
                }
                ?>
            </div>
            <h1 class="separator-title font-dokyo">BILLETTERIE</h1>
            <hr class="hr">
            <div class="separator-div home-ticket">
                <h2 class="font-circula"><i class="fa fa-ticket" aria-hidden="true"></i> Pass 1 Journée ou 2 Jours disponibles</h2>
                <a href="php/billetterie.php" class="btn btn-primary">Accéder à la Billetterie</a>
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
                                    <img src="../src/img/chuck.png" class="img-responsive">
                                    <h2 class="font-circula">La Jungle</h2>
                                    <hr class="hr">
                                    <p>Une six-cordes et un casio. Il n’en faut parfois pas plus pour faire péter le mercure et irriter les yeux de sueur après deux breaks et trois accords. Deux singes rouquins, un très grand et un plus petit, vous emmènent dans leur milieu naturel : La Jungle !</p>
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