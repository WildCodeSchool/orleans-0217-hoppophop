<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 06/04/17
 * Time: 20:22
 */

namespace Hph\Controller;
use Hph\Model\ArtistRequest;

class ArtistController extends ControllerDefault
{


    public function showArtist($id)
    {
        // appel au modèle
        $artistRequest = new ArtistRequest();
        $artist = $artistRequest->findOne($id);

        //recupere le tags pour un artist
        // appelle ton modèle $tags = Tag->findArtistTags($artist_id); // select * from tags where artist_id = $artist_id;
        // affichage de la page qui affiche un seul artiste 'tags'=>$tags

        // appel la methode render de twig
        return $this->twig->render('artist.html.twig', ['artists'=> $artist]);
    }

//    public function findTagArtist()
//    {
//        $artistRequesttag = new ArtistRequest();
//        $tag = $artistRequesttag->findArtistTags($artist_id);
//        return $this->twig->render('artist.html.twig', ['tags'=>$tag]);
//    }
//

}