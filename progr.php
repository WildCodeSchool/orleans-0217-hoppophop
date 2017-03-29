<?php
require('php/header.php');
?>

    <div class="container-fluid headerprog">

    </div>
    <div class="container-fluid filtreprog">

        <div class="row">

            <div class="col-xs-3 col-sm-4  col-lg-4 text-center">
                <h3 class="titletri">Trier par</h3>
            </div>
            <div class="col-xs-2 col-md-offset-2 col-md-2">
                <a class="btn dropdown-toggle btntri" data-toggle="dropdown" href=#>Lieux<span class="caret"></span></a>
                <ul class="dropdown-menu listtri">
                    <li><a href=#>Choix n°1</a></li>
                    <li><a href=#>Choix n°2</a></li>
                    <li><a href=#>Choix n°3</a></li>
                </ul>
            </div>
            <div class="col-xs-2 col-md-2">
                <a class="btn dropdown-toggle btntri" data-toggle="dropdown" href=#>Date<span class="caret"></span></a>
                <ul class="dropdown-menu listtri">
                    <li><a href=#>Choix n°1</a></li>
                    <li><a href=#>Choix n°2</a></li>
                    <li><a href=#>Choix n°3</a></li>
                </ul>
            </div>
            <div class="col-xs-2 col-md-2">
                <a class="btn dropdown-toggle btntri" data-toggle="dropdown" href=#>Groupes Locaux<span class="caret"></span></a>
                <ul class="dropdown-menu listtri">
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
            $total = 8;
            for ($i=0;$i<$total;$i++){
                ?>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail itemx">
                        <img src="src/img/chuck.png">
                        <div class="labelx text-center"><p class="layoutartiste">Chuck</p><p class="layoutag">Tag Tag Tag</p></div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>


<?php
require('php/footer.php');
?>