<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 25/04/17
 * Time: 00:03
 */

namespace Hph\Controller;


use Hph\Model\TagManager;

class TagController extends ControllerDefault
{
    public function setTag($artist_id)
    {
        $tagManager = new TagManager();
        return $tagManager->insertArtist($artist_id);
    }
    public function setArtistTag($artist_id)
    {
        $tagManager = new TagManager();

        if (isset($_POST['tags'])) {
            $tags = explode(",", $_POST['tags']);
            if (is_array($tags)) {
                foreach ($tags as $tag) {
                    $tagManager->insertTag($artist_id, trim($tag));
                }
            }

        }
    }
}