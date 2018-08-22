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
