<?php
/**
 * Created by PhpStorm.
 * User: wilder1
 * Date: 11/04/17
 * Time: 16:07
 */

namespace Hph\Model;

use Hph\ImgValidator;
use Hph\TextValidator;

class ProgrammationManager extends \Hph\Db
{

    public function allArtist()
    {
        $req = "SELECT * FROM artist";
        return $this->dBQuery($req, 'Artist');
    }


    public function getArtists()
    {
        $req = "SELECT * FROM artist JOIN concert ON artist.id=concert.artist_id WHERE status = 'programmed' OR status = 'canceled'";
        return $this->dBQuery($req, 'Artist');
    }


    public function getArtistsPlace($idLieux)
    {
        $req = " SELECT * FROM artist JOIN concert ON artist.id=concert.artist_id WHERE (status = 'programmed' OR status = 'canceled') AND concert.place_id=$idLieux";
        return $this->dBQuery($req, 'Artist');
    }


    public function getArtistsSoir($jour)
    {
        $req = " SELECT * FROM artist JOIN concert ON artist.id=concert.artist_id WHERE (status = 'programmed' OR status = 'canceled') AND concert.concert_start LIKE '2017-09-$jour%'";
        return $this->dBQuery($req, 'Artist');
    }


    public function getArtistsLocal($local)
    {
        $req = " SELECT * FROM artist JOIN concert ON artist.id=concert.artist_id WHERE (status = 'programmed' OR status = 'canceled') AND artist.local=$local";
        return $this->dBQuery($req, 'Artist');
    }

    public function addArtist($post, $file)
    {
        if (!isset($post['local'])) {
            $post['local'] = 0;
        }
        $vImg = new ImgValidator($file);
        $rImg = $vImg->validator();
        if($rImg!==true){
            return $rImg;
        }
        $vTitle = new TextValidator($post['name'], 150);
        $rTitle = $vTitle->validate();
        if($rTitle!==true){
            return $rTitle;
        }
        $vText = new TextValidator($post['content']);
        $rText = $vText->validate();
        if($rText!==true){
            return $rText;
        }
        $vVideo = new TextValidator($post['video_url']);
        $rVideo = $vVideo->validate();
        if($rVideo!==true){
            return $rVideo;
        }
        $vFB = new TextValidator($post['facebook_url']);
        $rFB = $vFB->validate();
        if($rFB!==true){
            return $rFB;
        }
        $vYT = new TextValidator($post['youtube_url']);
        $rYT = $vYT->validate();
        if($rYT!==true){
            return $rYT;
        }
        $vTwitter = new TextValidator($post['twitter_url']);
        $rTwitter = $vTwitter->validate();
        if($rTwitter!==true){
            return $rTwitter;
        }
        $vSpotify = new TextValidator($post['spotify_url']);
        $rSpotify = $vSpotify->validate();
        if($rSpotify!==true){
            return $rSpotify;
        }
        $sql = "INSERT INTO artist VALUES (NULL, '" . $post['name'] . "', '" . $post['content'] .
            "', '" . $file['img']['name'] . "', '" . $post['video_url'] . "', '" . $post['facebook_url'] .
            "', '" . $post['youtube_url'] . "', '" . $post['twitter_url'] . "', '" . $post['spotify_url'] .
            "', '" . $post['local'] . "')";
        $result = $this->getDb()->exec($sql);
        if($result){
            return $this->addImg($file, 'artist');
        }
        return $result;
    }

    public function updateArtist($post, $file)
    {
        if (!isset($post['local'])) {
            $post['local'] = 0;
        }
        $vImg = new ImgValidator($file);
        $rImg = $vImg->validator();
        if($rImg!==true){
            return $rImg;
        }
        $vTitle = new TextValidator($post['name'], 150);
        $rTitle = $vTitle->validate();
        if($rTitle!==true){
            return $rTitle;
        }
        $vText = new TextValidator($post['content']);
        $rText = $vText->validate();
        if($rText!==true){
            return $rText;
        }
        $vVideo = new TextValidator($post['video_url']);
        $rVideo = $vVideo->validate();
        if($rVideo!==true){
            return $rVideo;
        }
        $vFB = new TextValidator($post['facebook_url']);
        $rFB = $vFB->validate();
        if($rFB!==true){
            return $rFB;
        }
        $vYT = new TextValidator($post['youtube_url']);
        $rYT = $vYT->validate();
        if($rYT!==true){
            return $rYT;
        }
        $vTwitter = new TextValidator($post['twitter_url']);
        $rTwitter = $vTwitter->validate();
        if($rTwitter!==true){
            return $rTwitter;
        }
        $vSpotify = new TextValidator($post['spotify_url']);
        $rSpotify = $vSpotify->validate();
        if($rSpotify!==true){
            return $rSpotify;
        }
        if ($file['img']['name'] != '') {
            $sql = "UPDATE artist SET name = '" . $post['name'] . "', bio = '" . $post['bio'] .
                "', img_artist = '" . $file['img']['name'] . "', video_url = '" . $post['video_url'] .
                "', facebook_url = '" . $post['facebook_url'] . "', youtube_url = '" . $post['youtube_url'] .
                "', twitter_url = '" . $post['twitter_url'] . "', spotify_url = '" . $post['spotify_url'] .
                "', local = '" . $post['local'] . "' WHERE id = '" . $post['id'] . "'";
        } else {
            $sql = "UPDATE artist SET name = '" . $post['name'] . "', bio = '" . $post['bio'] . "', video_url = '" . $post['video_url'] .
                "', facebook_url = '" . $post['facebook_url'] . "', youtube_url = '" . $post['youtube_url'] .
                "', twitter_url = '" . $post['twitter_url'] . "', spotify_url = '" . $post['spotify_url'] .
                "', local = '" . $post['local'] . "' WHERE id = '" . $post['id'] . "'";
        }
        $result = $this->getDb()->exec($sql);
        if($result){
            return $this->addImg($file, 'artist');
        }
        return $result;
    }

    public function deleteArtist($id)
    {
        $sql = "DELETE FROM artist WHERE id=" . $id;
        return $this->getDb()->exec($sql);
    }


}