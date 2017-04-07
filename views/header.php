<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hop Pop Hop</title>
    <!-- Bootstrap -->

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../src/font-awesome/css/font-awesome.min.css">
    <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../src/css/style.css" rel="stylesheet">
    <link href="../src/img/logo-min.png" rel="icon">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
    <div class="container-fluid">
        <div class="navbar-header text-center">
            <a href="../index.php"><img src="../src/img/logo-min.png" class="navbar-brand"></a>
            <button type="button" class="navbar-toggle collapsed navbar-burger" data-toggle="collapse" data-target="#navbar-collapsed" aria-expanded="false">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1 class="navbar-text mobile-title">TITRE</h1>
        </div>
        <div class="collapse navbar-collapse navbar-menu" id="navbar-collapsed">
            <ul class="nav navbar-nav navbar-list">
                <li class="navbar-active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programmation <span class="caret"></span></a>
                    <ul class="dropdown-menu navbar-dropdown">
                        <li><a href="../index.php?page=programmation">Artistes</a></li>
                        <li><a href="../index.php?page=planning">Planning</a></li>
                    </ul>
                </li>
                <li><a href="../index.php?page=billetterie">Billetterie</a></li>
                <li><a href="../index.php?page=cashless">Cashless</a></li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">La vie au festival <span class="caret"></span></a>
                    <ul class="dropdown-menu navbar-dropdown">
                        <li><a href="../index.php?page=food">Se restaurer</a></li>
                        <li><a href="../index.php?page=lieux">Lieux</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Infos Pratiques <span class="caret"></span></a>
                    <ul class="dropdown-menu navbar-dropdown">
                        <li><a href="../index.php?page=benevolat">Bénévolat</a></li>
                        <li><a href="../index.php?page=venir">Comment venir</a></li>
                        <li><a href="../index.php?page=dimaorl">Dimanche à Orléans</a></li>
                    </ul>
                </li>
                <li><a href="../index.php?page=partner">Partenaires</a></li>
                <li><a href="../index.php?page=contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right social hidden-xs">
                <li><a href="#"><i class="fa fa-facebook-square navbar-logo" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square navbar-logo" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram navbar-logo" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-spotify navbar-logo" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-square navbar-logo" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</nav>