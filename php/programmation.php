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
                    <li><a href=#>Choix n°1</a></li>
                    <li><a href=#>Choix n°2</a></li>
                    <li><a href=#>Choix n°3</a></li>
                </ul>
            </div>
            <div class="col-xs-2 col-md-2 col-lg-1">
                <a class="btn dropdown-toggle filter-btn" data-toggle="dropdown" href=#>Date <span class="caret"></span></a>
                <ul class="dropdown-menu filter-list">
                    <li><a href=#>Choix n°1</a></li>
                    <li><a href=#>Choix n°2</a></li>
                    <li><a href=#>Choix n°3</a></li>
                </ul>
            </div>
            <div class="col-xs-2 col-md-2 col-lg-1">
                <a class="btn dropdown-toggle filter-btn" data-toggle="dropdown" href=#>Groupes Locaux <span class="caret"></span></a>
                <ul class="dropdown-menu filter-list">
                    <li><a href=#>Choix n°1</a></li>
                    <li><a href=#>Choix n°2</a></li>
                    <li><a href=#>Choix n°3</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $total = 16;
            for ($i=0;$i<$total;$i++){
                ?>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail prog-artist">
                        <img src="../src/img/chuck.png">
                        <div class="prog-info text-center"><p class="prog-name">Chuck Berry</p><p class="prog-tag">Tag Tag Tag</p></div>
                    </div>
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

