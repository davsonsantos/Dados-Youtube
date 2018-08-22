<?php

require 'Youtube.php';
$Ytb = new Youtube;

var_dump($Ytb->getDataVideo('https://www.youtube.com/watch?v=epYKVcHrVr0'));

 //Get videos from channel by YouTube Data API
$API_key = 'AIzaSyAuAfj5iLOO6Okq595tSlw4DG9ijLJUns4';
$channelID = 'UC15GqFDwpwLmmzkbfXQmi3Q';
$maxResults = 10;

$Ytb = new Youtube($API_key, $channelID, $maxResults);
foreach ($Ytb->getVideos()->items as $videos) :
    if (isset($videos->id->videoId)):
        echo "<div class='col-md-4'>
                <div class='album-cover-img'>
                    <img src='{$videos->snippet->thumbnails->high->url}' alt='{$videos->snippet->title}' title='{$videos->snippet->title}'>
                    <a href='https://www.youtube.com/watch?v={$videos->id->videoId}' class='popup-video-btn'><i class='fa fa-play'></i></a>
                </div>
            </div>";
    endif;
endforeach;