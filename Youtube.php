<?php

/**
 * Youtube [ HELPER ]
 * Simples classe para obter os videos de um canal do Youtube
 * Update by Davson V. Santos - DAVTECH - SOLUÇÕES INTELIGENTES
 */
class Youtube {

    private $Count;
    private $ChannelID;
    private $ApiKey;
    private $Url;
    private $Result;
    
    public function __construct($ApiKey = null, $ChannelID = null, $Count = NULL) {
        $this->ApiKey = $ApiKey;
        $this->ChannelID = $ChannelID;
        $this->Count = (!empty($Count) ? $Count : 10);
    }

    public function getVideos() {
        $this->Url = "https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId={$this->ChannelID}&maxResults={$this->Count}&key={$this->ApiKey}";
        return $this->Youtube();
    }

    private function Youtube() {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $this->Url);
        $result = curl_exec($ch);
        curl_close($ch);

        $this->Result = json_decode($result);
        return $this->Result;
    }

    function getDataVideo($URL){
        $this->Url = "https://www.youtube.com/oembed?url={$URL}&format=json";        
        return $this->Youtube();
    }

}
