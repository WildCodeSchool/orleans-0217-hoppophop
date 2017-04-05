<?php
require('header.php');
?>
<br />
<br />
<br />
<br />
<div class="container">
    <div class="row">
        <?php
        for($i=0;$i<3;$i++){
            ?>
            <div class="col-xs-12">
                <div class="media content-div">
                    <div class="media-body">
                        <h3 class="media-heading font-circula">La Fine Bouche</h3>
                        <br />
                        <p>Notre Food Truck est une véritable cuisine mobile. La Fine Bouche vous propose Burger, Frite, Salade, Dessert avec des produits 100% Français, Locaux et Fait Maison ! Cédric 36 ans, Chef Cuisiner, 11 ans d'expérience dans le métier, passionné de « la bonne bouffe », Je souhaite faire découvrir une bonne cuisine avec des produits qui viennent directement de producteurs locaux.</p>
                        <br />
                        <h4 class="font-circula">Vendredi de 18h à 22h <span class="turquoise">|</span> <span class="orange font-circula">Devant le 108</span></h4>
                        <hr class="hr">
                    </div>
                </div>
                <br />
                <br />
                <br />
            </div>
            <?php
        }
        ?>
    </div>
</div>
<?php
require('footer.php');
?>
