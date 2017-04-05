<?php
require('header.php');
?>
<br />
<br />
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-2 col-lg-1 col-xs-offset-1 col-md-offset-0 text-left">
                <a class="btn dropdown-toggle filter-btn font-circula" data-toggle="dropdown" href=#>Lieux <span class="caret"></span></a>
                <ul class="dropdown-menu filter-list">
                    <li><a href=# class="font-circula">JARDINS DE L'EVÊCHE</a></li>
                    <li><a href=# class="font-circula">LE 108</a></li>
                    <li><a href=# class="font-circula">CCNO</a></li>
                    <li><a href=# class="font-circula">SCENE NATIONALE D'ORLEANS</a></li>
                    <li><a href=# class="font-circula">SCENE DE L'INSTITUT</a></li>
                    <li><a href=# class="font-circula">HÔTEL DUPANLOUP</a></l
                </ul>
            </div>
            <div class="col-xs-12 col-xs-offset-1 col-md-2  col-md-offset-0 col-lg-1 text-left">
                <a class="btn dropdown-toggle filter-btn font-circula" data-toggle="dropdown" href=#>Date <span class="caret"></span></a>
                <ul class="dropdown-menu filter-list">
                    <li><a href=# class="font-circula">Vendredi Soir</a></li>
                    <li><a href=# class="font-circula">Samedi Soir</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-xs-offset-1 col-md-2  col-md-offset-0 col-lg-1 text-left">
                <a class="btn dropdown-toggle filter-btn font-circula" data-toggle="dropdown" href=#>Groupes Locaux <span class="caret"></span></a>
                <ul class="dropdown-menu filter-list">
                    <li><a href=# class="font-circula">Oui</a></li>
                    <li><a href=# class="font-circula">Non</a></li>
                </ul>
            </div>
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

</div>
<?php
require('footer.php');
?>

