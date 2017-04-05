<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 04/04/17
 * Time: 15:42
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des artistes</title>
</head>
<body>

        <form name="add_article" method="POST" action="articleAdd.php">
            <div class="form-group">
                <label for="titre">Artiste</label><input required="required" class="form-control" type="text"  name="titre"/>
            </div>
            <div class="form-group">
                <label for="contenu">Bio</label><textarea  required="required"  class="form-control"  name="contenu"></textarea>
            </div>
            <div class="form-group">
                <label for="auteur">Image</label><input required="required"  class="form-control" type="text"  name="auteur"/>
            </div>
            <input class="btn btn-success" type="submit" name="add" value="ADD artiste">
        </form>

        <a class="btn btn-primary" href = "articleList.php">Retour à la liste</a>


</body>
</html>
