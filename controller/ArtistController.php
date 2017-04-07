<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 06/04/17
 * Time: 20:22
 */

namespace hph\controller;

class ArtistController extends Controller
{
    public function render ($twig)
    {
        $template = $twig->load('artist.html.twig');
        echo $template->render(array('artist' => '', 'text' => 'Le Texte', 'breakingNews' => 0));
    }
    public function listAll() {
        //$db = new DB();
        //$artiste = $db -> findAll('artiste');

        return $this -> render('artiste/listAllartiste.php');
    }

    public function show($id)
    {
        //$db = new DB();
        //$eleve = $db -> findOne('artiste', $id);
        return $this->render('artiste/showartiste.php', ['artiste'=>$artiste]);

    }


    public function add() {

    }

    /**
     *
     */
    public function update() {

    }

    /**
     *
     */
    public function delete() {

    }
}