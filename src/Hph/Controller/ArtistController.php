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


    public function showArtist($id)
    {
        // appel au modèle
        $artistManager = new ArtistManager();
        $artists = $artistManager->findOne($id);
        $tags = $artistManager->findArtistTag($id);
        $progs = $artistManager->findProg($id);
<<<<<<< HEAD

        // affichage de la page qui affiche un seul artiste 'tags'=>$tags

        // appel la methode render de twig
        return $this->twig->render('artist.html.twig',
                                    ['artist'=> $artists[0],
                                        'tags'=> $tags,
                                        'progs'=>$progs]);
=======
        //recupere le tags pour un artist
        // appelle ton modèle $tags = Tag->findArtistTags($artist_id); // select * from tags where artist_id = $artist_id;
        // affichage de la page qui affiche un seul artiste 'tags'=>$tags

        // appel la methode render de twig
        $partner = $this->getPartner();
        return $this->twig->render('artist.html.twig', ['artist'=> $artists[0], 'tags'=> $tags, 'progs'=>$progs, 'partners'=>$partner]);
>>>>>>> ffadcbe4849b3e7e1f009bb75b37fda89da948b3
    }




}