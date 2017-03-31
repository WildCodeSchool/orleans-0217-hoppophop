<?php
require('header.php');
?>
    <div class="container-fluid header-div">

    </div>
    <div class="container-fluid prog-filter">
        <div class="row">
            <div class=" col-xs-3 col-sm-4 col-md-5 col-lg-6 text-center">
                <h3 class="filter-title">Trier par  :</h3>
            </div>
            <div class="col-xs-2 col-md-2 col-lg-1">
                <a class="btn dropdown-toggle filter-btn" data-toggle="dropdown" href=#>Lieux <span class="caret"></span></a>
                <ul class="dropdown-menu filter-list">
                    <li><a href=#>JARDINS DE L'EVÊCHE</a></li>
                    <li><a href=#>LE 108</a></li>
                    <li><a href=#>CCNO</a></li>
                    <li><a href=#>SCENE NATIONALE D'ORLEANS</a></li>
                    <li><a href=#>SCENE DE L'INSTITUT</a></li>
                    <li><a href=#>HÔTEL DUPANLOUP</a></li>
                </ul>
            </div>
            <div class="col-xs-2 col-md-2 col-lg-1">
                <a class="btn dropdown-toggle filter-btn" data-toggle="dropdown" href=#>Date <span class="caret"></span></a>
                <ul class="dropdown-menu filter-list">
                    <li><a href=#>Vendredi Soir</a></li>
                    <li><a href=#>Samedi Soir</a></li>
                </ul>
            </div>
            <div class="col-xs-2 col-md-2 col-lg-1">
                <a class="btn dropdown-toggle filter-btn" data-toggle="dropdown" href=#>Groupes Locaux <span class="caret"></span></a>
                <ul class="dropdown-menu filter-list">
                    <li><a href=#>Oui</a></li>
                    <li><a href=#>Non</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="artiste.php">
                    <div class="thumbnail prog-artist text-center">
                        <img src="../src/img/chuck.png" class="img-cancel">
                        <div class="prog-info text-center"><p class="prog-name">Chuck Berry</p><p class="prog-tag">Tag Tag Tag</p></div>
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
                        <div class="thumbnail prog-artist">
                            <img src="../src/img/chuck.png">
                            <div class="prog-info text-center"><p class="prog-name">Chuck Berry</p><p class="prog-tag">Tag Tag Tag</p></div>
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