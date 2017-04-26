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
use PDO;

class ProgrammationManager extends \Hph\Db
{

    public function allArtist()
    {
        $req = "SELECT a.*, t.name as tag_name FROM hph.artist a LEFT JOIN hph.tag t ON a.id = t.artist_id ORDER BY a.id";
        $data = $this->dBFetchAll($req);
        $artists = [];
        foreach ($data as $artist) {
            if (!array_key_exists($artist['id'], $artists)) {
                $artists[$artist['id']] = $artist;
            }
            $artists[$artist['id']]['tags'][] = $artist['tag_name'];
        }

        return $artists;
    }

//    public function profileArtist()
//    {
//        $req = "SELECT * FROM hph.artist a LEFT JOIN hph.tag t ON a.id = t.artist_id";
//        return $this->dBQuery($req, 'Artist');
//    }

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
        $rImg = $vImg->validate();
        if($rImg!==true){
            return $rImg;
        }
        $file['img']['name'] = $this->nameImg($file['img']['name']);
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
        $vVideo = new TextValidator($post['video_url'], 0, 'url');
        $rVideo = $vVideo->validate();
        if($rVideo!==true){
            return $rVideo;
        }
        $vFB = new TextValidator($post['facebook_url'], 0, 'url');
        $rFB = $vFB->validate();
        if($rFB!==true){
            return $rFB;
        }

        $sql = "INSERT INTO artist VALUES (NULL, '" . $post['name'] . "', '" . $post['bio'] .
            "', '" . $file['img']['name'] . "', '" . $post['video_url'] . "', '" . $post['facebook_url'] .
            "', '" . $post['youtube_url'] . "', '" . $post['twitter_url'] . "', '" . $post['spotify_url'] .
            "', '" . $post['local'] . "')";

        return $this->getDb()->exec($sql);

        $vYT = new TextValidator($post['youtube_url'], 0, 'url');
        $rYT = $vYT->validate();
        if($rYT!==true){
            return $rYT;
        }
        $vTwitter = new TextValidator($post['twitter_url'], 0, 'url');
        $rTwitter = $vTwitter->validate();
        if($rTwitter!==true){
            return $rTwitter;
        }
        $vSpotify = new TextValidator($post['spotify_url'], 0, 'url');
        $rSpotify = $vSpotify->validate();
        if($rSpotify!==true){
            return $rSpotify;
        }
        $query = "INSERT INTO artist VALUES (NULL, :name, :content, :img, :video_url, :facebook_url, :youtube_url, :twitter_url, :spotify_url, :local)";
        $prep = $this->getDb()->prepare($query);
        $prep->bindValue(':name', $post['name'], PDO::PARAM_STR);
        $prep->bindValue(':content', $post['content'], PDO::PARAM_STR);
        $prep->bindValue(':img', $file['img']['name'], PDO::PARAM_STR);
        $prep->bindValue(':video_url', $post['video_url'], PDO::PARAM_STR);
        $prep->bindValue(':facebook_url', $post['facebook_url'], PDO::PARAM_STR);
        $prep->bindValue(':youtube_url', $post['youtube_url'], PDO::PARAM_STR);
        $prep->bindValue(':twitter_url', $post['twitter_url'], PDO::PARAM_STR);
        $prep->bindValue(':spotify_url', $post['spotify_url'], PDO::PARAM_STR);
        $prep->bindValue(':local', $post['local'], PDO::PARAM_INT);
        $this->addImg($file, 'artist');
        return $prep->execute();

    }


    public function updateArtist($post, $file)
    {
        if (!isset($post['local'])) {
            $post['local'] = 0;
        }
        if ($file['img']['name'] != '') {
            $vImg = new ImgValidator($file);
            $rImg = $vImg->validate();
            if($rImg!==true){
                return $rImg;
            }
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
        $vVideo = new TextValidator($post['video_url'], 0, 'url');
        $rVideo = $vVideo->validate();
        if($rVideo!==true){
            return $rVideo;
        }
        $vFB = new TextValidator($post['facebook_url'], 0, 'url');
        $rFB = $vFB->validate();
        if($rFB!==true){
            return $rFB;
        }
        $vYT = new TextValidator($post['youtube_url'], 0, 'url');
        $rYT = $vYT->validate();
        if($rYT!==true){
            return $rYT;
        }
        $vTwitter = new TextValidator($post['twitter_url'], 0, 'url');
        $rTwitter = $vTwitter->validate();
        if($rTwitter!==true){
            return $rTwitter;
        }
        $vSpotify = new TextValidator($post['spotify_url'], 0, 'url');
        $rSpotify = $vSpotify->validate();
        if($rSpotify!==true){
            return $rSpotify;
        }
        if ($file['img']['name'] != '') {
            $file['img']['name'] = $this->nameImg($file['img']['name']);
            $query = "UPDATE artist SET name = :name, bio = :content, img_artist = :img, video_url = :video_url, facebook_url = :facebook_url, youtube_url = :youtube_url, twitter_url = :twitter_url, spotify_url = :spotify_url, local = :local WHERE id = :id";
        } else {
            $query = "UPDATE artist SET name = :name, bio = :content, video_url = :video_url, facebook_url = :facebook_url, youtube_url = :youtube_url, twitter_url = :twitter_url, spotify_url = :spotify_url, local = :local WHERE id = :id";
        }

        if (isset($post['tags']) && $post['tags'] != '') {
            $req = "DELETE FROM tag WHERE artist_id = :id";
            $stmt = $this->getDb()->prepare($req);
            $stmt->bindValue(':id', $post['id']);
            $stmt->execute();

            $tagManager = new TagManager();
            $tags = trim($post['tags']);
            $tags = explode(',', $tags);
            foreach ($tags as $tag) {
                $tagManager->insertTag($tag, $post['id']);
            }
        }

        $prep = $this->getDb()->prepare($query);
        $prep->bindValue(':name', $post['name'], PDO::PARAM_STR);
        $prep->bindValue(':content', $post['content'], PDO::PARAM_STR);
        $prep->bindValue(':video_url', $post['video_url'], PDO::PARAM_STR);
        $prep->bindValue(':facebook_url', $post['facebook_url'], PDO::PARAM_STR);
        $prep->bindValue(':youtube_url', $post['youtube_url'], PDO::PARAM_STR);
        $prep->bindValue(':twitter_url', $post['twitter_url'], PDO::PARAM_STR);
        $prep->bindValue(':spotify_url', $post['spotify_url'], PDO::PARAM_STR);
        $prep->bindValue(':local', $post['local'], PDO::PARAM_INT);
        $prep->bindValue(':id', $post['id'], PDO::PARAM_INT);
        if($file['img']['name']!=''){
            $prep->bindValue(':img', $file['img']['name'], PDO::PARAM_STR);
            $this->addImg($file, 'artist', $post['id']);
        }
        return $prep->execute();

    }
    public function deleteArtist($id)
    {
        $query = "DELETE FROM artist WHERE id = :id";
        $prep = $this->getDb()->prepare($query);
        $prep->bindValue(':id', $id, PDO::PARAM_INT);
        $this->supprImg($id, 'artist');
        return $prep->execute();
    }
}