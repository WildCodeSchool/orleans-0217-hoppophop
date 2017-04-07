<?php
require('base.html.twig');

?>
    <div class="container text-center">
        <div class="row hidden-sm hidden-xs">
            <?php
            for ($g=0;$g<2;$g++) {
                ?>
            <h1 class="separator-title font-dokyo">JOUR</h1>
            <hr class="hr">
            <br />
            <?php
            for ($h=0;$h<6;$h++) {
                ?>
                <div class="col-md-2">
                    <h3 class="planning-location font-circula">LIEU</h3>
                </div>
                <?php
            }
                ?>
        </div>
        <br />
        <br />
        <div class="row planning">
            <?php
                for($i=0;$i<6;$i++){
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
            }
            ?>

            <div class="visible-xs visible-sm">
                <h1 class="separator-title"><a class="planning-link font-dokyo" data-toggle="collapse" href="#collapseVendredi" aria-expanded="false" aria-controls="collapseVendredi">JOUR</a></h1>
                <br />
                <hr class="hr-min">
                <div class="collapse planning-collapse" id="collapseVendredi">
                    <div class="collapse-content">
                        <h3 class="planning-locationSmall font-dokyo">LIEUX</h3>
                        <p class="planning-showSmall font-circula">
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert très long, mais vraiment, il est trèeeeeeeees long<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                        </p>
                        <h3 class="planning-locationSmall font-dokyo">LE 108</h3>
                        <p class="planning-showSmall font-circula">
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                        </p>
                        <h3 class="planning-locationSmall font-dokyo">CCNO</h3>
                        <p class="planning-showSmall font-circula">
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                        </p>
                        <h3 class="planning-locationSmall font-dokyo">SCENE NATIONALE D'ORLEANS</h3>
                        <p class="planning-showSmall font-circula">
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                        </p>
                        <h3 class="planning-locationSmall font-dokyo">SCENE DE L'INSTITUT</h3>
                        <p class="planning-showSmall font-circula">
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                        </p>
                        <h3 class="planning-locationSmall font-dokyo">HOTEL DUPANLOUP</h3>
                        <p class="planning-showSmall font-circula">
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
                   <div class="visible-xs visible-sm">
                <h1 class="separator-title"><a class="planning-link font-dokyo" data-toggle="collapse" href="#collapseSamedi" aria-expanded="false" aria-controls="collapseSamedi">SAMEDI</a></h1>
                <br />
                <hr class="hr-min">
                <div class="collapse planning-collapse" id="collapseSamedi">
                    <div class="collapse-content">
                        <h3 class="planning-locationSmall font-dokyo">JARDINS DE L'EVÊCHE</h3>
                        <p class="planning-showSmall font-circula">
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert très long, mais vraiment, il est trèeeeeeeees long<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                        </p>
                        <h3 class="planning-locationSmall font-dokyo">LE 108</h3>
                        <p class="planning-showSmall font-circula">
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                        </p>
                        <h3 class="planning-locationSmall font-dokyo">CCNO</h3>
                        <p class="planning-showSmall font-circula">
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                        </p>
                        <h3 class="planning-locationSmall font-dokyo">SCENE NATIONALE D'ORLEANS</h3>
                        <p class="planning-showSmall font-circula">
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                        </p>
                        <h3 class="planning-locationSmall font-dokyo">SCENE DE L'INSTITUT</h3>
                        <p class="planning-showSmall font-circula">
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                        </p>
                        <h3 class="planning-locationSmall font-dokyo">HOTEL DUPANLOUP</h3>
                        <p class="planning-showSmall font-circula">
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                            <span class="turquoise font-circula bold">18h-19h : </span><br /> concert<br/>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require('footer.html.twig');
?>