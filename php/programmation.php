<?php
require('header.php');
?>
<div class="text-center">
    <div class="dropdown prog-dropdown">
        <button class="btn btn-default dropdown-toggle filter-btn font-circula" type="button" id="filter-places" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Lieux <span class="caret"></span></button>
        <ul class="dropdown-menu" aria-labelledby="filter-places">
            <li><a href="#" class="font-circula">JARDINS DE L'EVÊCHE</a></li>
            <li><a href="#" class="font-circula">LE 108</a></li>
            <li><a href="#" class="font-circula">CCNO</a></li>
            <li><a href="#" class="font-circula">SCENE NATIONALE D'ORLEANS</a></li>
            <li><a href="#" class="font-circula">SCENE DE L'INSTITUT</a></li>
            <li><a href="#" class="font-circula">HÔTEL DUPANLOUP</a></li>
        </ul>
    </div>
    <div class="dropdown prog-dropdown">
        <button class="btn btn-default dropdown-toggle filter-btn font-circula" type="button" id="filter-days" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Soirs <span class="caret"></span></button>
        <ul class="dropdown-menu" aria-labelledby="filter-days">
            <li><a href="#" class="font-circula">Vendredi Soir</a></li>
            <li><a href="#" class="font-circula">Samedi Soir</a></li>
        </ul>
    </div>
    <div class="dropdown prog-dropdown">
        <button class="btn btn-default dropdown-toggle filter-btn font-circula" type="button" id="filter-local" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Groupes Locaux <span class="caret"></span></button>
        <ul class="dropdown-menu" aria-labelledby="filter-local">
            <li><a href="#" class="font-circula">Oui</a></li>
            <li><a href="#" class="font-circula">Non</a></li>
        </ul>
    </div>
</div>
<br />
<br />
<br />
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <a href="artiste.php">
                <div class="thumbnail thumbnail-div prog-artist text-center">
                    <img src="../src/img/chuck.png" class="prog-img img-cancel">
                    <div class="content-div prog-info text-center">
                        <p class="info-text">CHUCK BERRY CHUCK BERRY CHUCK BERRY</p>
                        <hr class="hr-min">
                        <p class="info-text">Vendredi 16h</p>
                    </div>
                    <h1 class="prog-cancel font-dokyo">Annulé</h1>
                </div>
            </a>
        </div>
        <?php
        $total = 15;
        for ($i=0;$i<$total;$i++){
            ?>
            <div class="col-md-3 col-sm-6">
                <a href="artiste.php">
                    <div class="thumbnail thumbnail-div prog-artist">
                        <img src="../src/img/chuck.png" class="img-responsive prog-img">
                        <div class="content-div prog-info text-center">
                            <p class="info-text">CHUCK BERRY</p>
                            <hr class="hr-min">
                            <p class="info-text">Vendredi 16h</p>
                        </div>
                    </div>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<?php
require('footer.php');
?>

