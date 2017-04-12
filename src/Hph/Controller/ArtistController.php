<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 06/04/17
 * Time: 20:22
 */

namespace Hph\Controller;
use Hph\Model\ArtistRequest;

class ArtistController
{
    public function showArtist($id)
    {
        $artist = new ArtistRequest();
        return $artist->showArtist($id);

    }
    public function render($twig, $id)
    {
      $artists = $this->showArtist($id);
      $template = $twig->load('artiste.html.twig');
    echo $template->render(['artists' =>$artists]);

    }


}