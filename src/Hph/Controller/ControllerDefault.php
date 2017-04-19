<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 12/04/17
 * Time: 15:39
 */

namespace Hph\Controller;


class ControllerDefault
{
    protected $twig;
    public function __construct($type = 'front')
    {
        if($type=='front'){
            $loader = new \Twig_Loader_Filesystem('src/Hph/View/front/');
        }else{
            $loader = new \Twig_Loader_Filesystem('../src/Hph/View/back/');
        }
        $this->twig = new \Twig_Environment($loader, array('debug' => true,'cache' => false));
        $this->twig->addExtension(new \Twig_Extension_Debug());
    }
    public function addImg($file)
    {
        $extensionsOk = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        if ($file['error'] == 0) {
            if ($file['img']['size'] > 1000) {
                $file = strtolower(substr(strrchr($file['img']['name'], '.'),1));
                //On récupère l'extension de l'image en MINISCULE pour que la comparaison avec les extensions authorisées fonctionne
                if (in_array($extensionImg, $extensionsOk)) {
                    //On vérifie l'extension
                    if (move_uploaded_file($_FILES['citationImg']['tmp_name'], 'img/'.$_FILES['citationImg']['name'])) {
                        //On transfère l'image dans le dossier img
                        $img = secure($bdd, $_FILES['citationImg']['name']);
                        //On récupère le nom de l'image pour pouvoir la stocker dans la bdd
                    } else {
                        $error.= " Erreur : L'upload de l'image a échoué";
                    }
                } else {
                    $error.= "Erreur : Extension incorrect";
                }
            } else {
                $error.= "Erreur : L'image est trop lourde";
            }
        } else if (!isset($_FILES['citationImg']['name'])) {
            //On affiche un message d'erreur uniquement si l'utilisateur a uploadé une image
            $error.= "Erreur : L'image n'a pas été uploadé";
        }
    }
}