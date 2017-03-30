<?php
require('header.php');
?>
<div class="container">
    <div class="row">
        <?php
        for($i=0;$i<3;$i++){
            ?>
            <div class="col-xs-12">
                <div class="media content-div">
                    <div class="media-left media-middle">
                        <a href="#">
                            <img class="media-object" src="../src/img/tristesse_contemporaine.jpg" alt="La Fine Bouche">
                        </a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading font-circula">La Fine Bouche</h3>
                        <p>Notre Food Truck est une véritable cuisine mobile. La Fine Bouche vous propose Burger, Frite, Salade, Dessert avec des produits 100% Français, Locaux et Fait Maison ! Cédric 36 ans, Chef Cuisiner, 11 ans d'expérience dans le métier, passionné de « la bonne bouffe », Je souhaite faire découvrir une bonne cuisine avec des produits qui viennent directement de producteurs locaux.</p>
                        <hr class="hr">
                        <h4 class="font-circula">Vendredi de 18h à 22h | Devant le 108</h4>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<?php
require('footer.php');
?>
