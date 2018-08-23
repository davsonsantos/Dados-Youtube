# Dados-Youtube
Retorna a lista de videos de uma canal e os dados de um video especifico

@copyright (c) 2018, Davson Santos - (contato@davsonsantos.com.br)

# Como Utilizar?

- Criando o Objeto
```html
required 'Youtube.php';
$Ytb = new Youtube;
```
- Dados da API do Youtube
```html
$API_key = '[API_KEY]';
$channelID = '[ID-CANAL-YOU]';
$maxResults = 10; //quantide de vidoes do canal que retornam
```

```html
Retona as informações de um unico video
var_dump($Ytb->getDataVideo('URL-COMPLETA-DO-YOUTUBE')); //https://www.youtube.com/watch?v=ABCdef
 ```
```html
Retorna uma lista de vídeos
$Ytb = new Youtube($API_key, $channelID, $maxResults);
foreach ($Ytb->getVideos()->items as $videos) :
   if (isset($videos->id->videoId)):
     echo "<div>
             <img src='{$videos->snippet->thumbnails->high->url}' alt='{$videos->snippet->title}' title='{$videos->snippet->title}'>
             <a href='https://www.youtube.com/watch?v={$videos->id->videoId}' class='popup-video-btn'><i class='fa fa-play'></i></a>
           </div>";
 endif;
endforeach;
```
