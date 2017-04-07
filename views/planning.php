<div class="container text-center">
    <?php
    for ($g=0;$g<2;$g++) {
        ?>
        <div class="row hidden-sm hidden-xs">

            <h1 class="separator-title hidden-sm hidden-xs font-dokyo">JOUR</h1>
            <hr class="hr hidden-xs hidden-sm">
            <br />
            <?php
            for ($h=0;$h<6;$h++) {
                ?>
                <div class="col-md-2 hidden-sm hidden-xs">
                    <h3 class="planning-location font-circula">LIEU</h3>
                </div>
                <?php
            }
            ?>
        </div>
        <br />
        <br />
        <div class="row">
            <?php
            for($i=0;$i<6;$i++) {
                ?>
                <div class="col-md-2 hidden-sm hidden-xs">
                    <?php
                    if($i%2==0) {
                        for ($j = 0; $j < 4; $j++) {
                            ?>
                            <div class="planning-show show-blue font-default"><p>CONCERT DE LA MORT QUI TUE<br/>18h-19h
                                </p></div><br/>
                            <?php
                        }
                    }
                    else {
                        for ($j = 0; $j < 4; $j++) {
                            ?>
                            <div class="planning-show show-orange font-default"><p>CONCERT DE LA MORT QUI TUE<br/>18h-19h
                                </p></div><br/>
                            <?php
                        }
                    }
                    ?>
                </div>
                <?php
            }
            ?>
        </div>
        <?php
    }
    ?>
    <div class="row">
        <div class="visible-xs visible-sm">
            <?php
            for ($m = 0; $m < 2; $m++) {
            ?>
            <h1 class="separator-title">
                <a class="planning-link font-dokyo" data-toggle="collapse" href="#collapseVendredi<?= $m ?>"
                   aria-expanded="false" aria-controls="collapseVendredi<?= $m ?>">JOUR</a>
            </h1>
            <br/>
            <hr class="hr-min">
            <div class="collapse planning-collapse" id="collapseVendredi<?= $m ?>">
                <div class="collapse-content">
                    <?php
                    for ($n = 0; $n < 6; $n++) {
                        ?>
                        <h3 class="planning-locationSmall font-dokyo">LIEU</h3>
                        <?php
                        for ($o = 0; $o < 4; $o++) {
                            ?>
                            <p class="planning-showSmall font-circula">
                                <span class="turquoise font-circula bold">18h-19h : </span><br/> concert très long, mais
                                vraiment, il est trèeeeeeeees long
                            </p>
                            <br/>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>


<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-xs-4">
                    <a href="#" class="thumbnail thumbnail-div footer-sponsor">
                        <img src="../src/img/sponsors/adami.png" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-3 col-xs-4">
                    <a href="#" class="thumbnail thumbnail-div footer-sponsor">
                        <img src="../src/img/sponsors/cnv.png" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-3 col-xs-4">
                    <a href="#" class="thumbnail thumbnail-div footer-sponsor">
                        <img src="../src/img/sponsors/creditmut.png" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-3 col-xs-4">
                    <a href="#" class="thumbnail thumbnail-div footer-sponsor">
                        <img src="../src/img/sponsors/loiret.png" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-3 col-xs-4">
                    <a href="#" class="thumbnail thumbnail-div footer-sponsor">
                        <img src="../src/img/sponsors/orleans.png" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-3 col-xs-4">
                    <a href="#" class="thumbnail thumbnail-div footer-sponsor">
                        <img src="../src/img/sponsors/region.png" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-3 col-md-offset-0 col-xs-4  col-xs-offset-2">
                    <a href="#" class="thumbnail thumbnail-div footer-sponsor">
                        <img src="../src/img/sponsors/sacem.png" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-3 col-md-offset-0 col-xs-4">
                    <a href="#" class="thumbnail thumbnail-div footer-sponsor">
                        <img src="../src/img/sponsors/ecole.png" class="img-responsive" id="ecole-logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center visible-xs">
        <i class="fa fa-facebook-square social-logo" aria-hidden="true"></i>
        <i class="fa fa-twitter-square social-logo" aria-hidden="true"></i>
        <i class="fa fa-instagram social-logo" aria-hidden="true"></i>
        <i class="fa fa-spotify social-logo" aria-hidden="true"></i>
        <i class="fa fa-youtube-square social-logo" aria-hidden="true"></i>
    </div>
    <div class="footer-last text-center">
        <p class="footer-legal">Mentions Légales</p>
    </div>
</footer>
<script src="../src/js/jquery-3.1.1.min.js"></script>
<script src="../src/bootstrap/js/bootstrap.min.js"></script>
<script src="../src/js/script.js"></script>
</body>
</html>