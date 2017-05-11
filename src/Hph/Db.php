<?php

namespace Hph;

/*
 * La classe DB gère la connexion à la BDD, et propose un certain nombre de méthode.
 *
 * La méthode addImg permet d'uploader une image :
 * - Elle prend trois paramêtres : l'image ($_FILES), le type d'image (foodtruck, artist ...) et l'image à supprimer (par défaut à 0, c'est à dire aucune image à supprimer)
 * - On commence par créer le chemin du dossier ou sera uploadé l'image, en partant de la racine, et en fonction du type passé en paramêtre
 * - Si l'image n'a pas d'erreur, on appelle la méthode supprImg pour supprimer l'image précédente (si image à supprimer il y a), puis on upload l'image
 *
 * La méthode supprImg permet de supprimer une image :
 * - Elle prend en paramêtre l'identifiant de l'image à supprimer, et son type (foodtruck, artiste...)
 * - En fonction de son type, on récupère via la BDD le nom de l'image à supprimer
 * - On créer le chemin de l'image à supprimer
 * - On supprimer l'image
 *
 * La méthode nameImg permet de générer un nom unique d'image :
 * - Elle prend en paramêtre le nom d'image
 * - Elle génère un nombre aléatoire x comprit entre 0 et 9 999 999
 * - Elle retourne le nom d'image sous la forme x_nom
 */
class Db
{
    private $db;
    /**
     * DB constructor.
     * @param $db */

    public function __construct()
    {
        $this->db = new \PDO(DSN, USER, PASS);
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->db->query('SET NAMES utf8');
    }


    /**
     * @return \PDO
     */
    public function getDb()
    {
        return $this->db;
    }

    public function dBQueryOne($req)
    {
        return $this->db->query($req)->fetch();
    }

    public function dBQuery($req, $model)
    {
        return $this->db->query($req)->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . '\Model\\'.ucfirst($model));
    }

    public function dBQueryWoFetchStyle($req)
    {
        return $this->db->query($req)->fetchAll();
    }


    public function dBFetchAll($req)
    {
        return $this->db->query($req)->fetchAll();
    }

    public function supprImg($id, $type)
    {
        if ($type == 'artist')
        {
            $req = "SELECT img_artist FROM artist WHERE id=$id";
        }
        elseif ($type == 'foodtruck')
        {
            $req = "SELECT img_eat FROM eat WHERE id=$id";
        }
        elseif ($type == 'news')
        {
            $req = "SELECT img_news FROM news WHERE id=$id";
        }
        elseif ($type == 'partner')
        {
            $req = "SELECT img_partner FROM partner WHERE id=$id";
        }
        elseif ($type == 'place')
        {
            $req = "SELECT img_place FROM place WHERE id=$id";
        }
        elseif ($type == 'sunday')
        {
            $req = "SELECT img_sunday FROM sunday WHERE id=$id";
        }
        $reqDone = $this->dBQueryWoFetchStyle($req);
        $src = realpath(dirname(getcwd())).'/web/img/'.$type.'/';
        if(unlink($src.$reqDone['0']['0'])){
            return true;
        }
        return false;
    }

    public function addImg($file, $type, $delete = 0)
    {
        $src = realpath(dirname(getcwd())) . '/web/img/' . $type . '/';
        if ($file['img']['error'] == 0) {
            $tmp = $file['img']['tmp_name'];
            $name = $file['img']['name'];
            if ($delete > 0) {
                $this->supprImg($delete, $type);
            }
            if (move_uploaded_file($tmp, $src . $name)) {
                return true;
            }
            return false;
        }
        return false;
    }
    public function nameImg($name)
    {
        return rand(0,9999999).'_'.$name;
    }
}