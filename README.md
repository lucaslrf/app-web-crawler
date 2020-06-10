### Web Crawler

Web Crawler utilizando PHP

### Passos para utilização

Acesse o link: 
Utilize o input de pesquisa para pesquisar a url desejada
Espere o carregamento e as pastas para visualização das pages e os assets (css, js, img) logo ficam disponíveis

### Passos para testes

Caso queira fazer testes no localhost clone o repositório
Coloque na pasta de um server local (Ex.: wamp) e acesse a url localhost/app_web_crawler

### Passos para construção

Caso queira construir o próprio Web Crawler baseado nesse, utilize o DOMDocument do php.

```
    $document = new DOMDocument();
```

Com ele vai ser possível carregar o documento a partir de uma url ou arquivo html:

```
    $url = "sua_url";
    $document = new DOMDocument();
    @$document->loadHTMLFile($url);

```

Após entender a utilização, é possível criar uma regra para capturar um determinado elemento do documento html. Isso é possível a parte da função ```getElementsByTagName```: 

```
    $links = $document->getElementsByTagName('link')
```

Isso possibilita pegar todas as ocorrências daquela tag dentro do documento html (Uma lista de nós encontrados daquela tag).
A partir disso é possível pegar um atributo específico da tag:

```
foreach ($links as $node) {
    $link = $node->getAttribute('href');
}
```

A tag ```('link')``` é um exemplo, verifique qual é a necessidade da sua aplicação.
