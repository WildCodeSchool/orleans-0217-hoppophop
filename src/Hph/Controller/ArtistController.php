<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 06/04/17
 * Time: 20:22
 */

namespace Hph\Controller;
use Hph\Model\ArtistManager;

class ArtistController extends ControllerDefault
{
    public function showArtist($slug)
    {
        // appel au modèle
        $artistManager = new ArtistManager();
        $artists = $artistManager->findOne($slug);
        $tags = $artistManager->findArtistTag($artists[0]->id);
        $progs = $artistManager->findProg($artists[0]->id);

        //recupere le tags pour un artist
        // appelle ton modèle $tags = Tag->findArtistTags($artist_id); // select * from tags where artist_id = $artist_id;
        // affichage de la page qui affiche un seul artiste 'tags'=>$tags

        // appel la methode render de twig
        return $this->twig->render('artist.html.twig', ['artist'=> $artists[0], 'tags'=> $tags, 'progs'=>$progs]);
    }




}