<?php

include 'search.php';

if (isset($_POST["url"])) {

    $url = $_POST["url"];

    $document = new DOMDocument();

    @$document->loadHTMLFile($url);

    $pages = getLinksPages($document, $url);
    $assets_css = getLinksCss($document, $url);
    $assets_js = getLinksJs($document, $url);
    $assets_images = getLinksImages($document, $url);
}

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Crawlert</title>
    <link href="css/global.css" rel="stylesheet" type="text/css">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="js/funcoes.js" type="text/javascript"></script>
</head>

<body>

    <header class="header">
        <h1 class="title">
            Web Crawler PHP
        </h1>
    </header>

    <div class="container">
        <form action="" method="post">
            <input type="text" placeholder="Insira a url" name="url" required="true">
            <input type="submit" value="Search Domain">
        </form>
    </div>

    <div class="dados-dominio">
        <?php if (isset($pages) && count($pages) > 0) { ?>
            <span>
                <a href="#"><img onclick="mostrarConteudoPasta('folder-pages', this)" class="icon-arrow" id="icon-arrow-page" src="./img/arrow_right.svg"></a>
                <img class="icon-folder" src="./img/folder.svg">
                pages
            </span>
            <div id="folder-pages">
                <ul>
                    <?php foreach ($pages as $indice => $page) { ?>
                        <li><?php echo $page ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>

        <?php if (isset($assets_css) && count($assets_css) > 0) { ?>
            <span>
                 <a href="#"><img onclick="mostrarConteudoPasta('folder-css', this)" class="icon-arrow" id="icon-arrow-css" src="./img/arrow_right.svg"></a>
                 <img class="icon-folder" src="./img/folder.svg">
                css
            </span>
            <div id="folder-css">
                <ul>
                    <?php foreach ($assets_css as $indice => $css) { ?>
                        <li><?php echo $css ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>

        <?php if (isset($assets_js) && count($assets_js) > 0) { ?>
            <span>
                 <a href="#"><img onclick="mostrarConteudoPasta('folder-js', this)" class="icon-arrow" id="icon-arrow-js" src="./img/arrow_right.svg"></a>
                 <img onclick="mostrarConteudoPasta('folder-js')" class="icon-folder" src="./img/folder.svg">
                js
            </span>
            <div id="folder-js">
                <ul>
                    <?php foreach ($assets_js as $indice => $js) { ?>
                        <li><?php echo $js ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>

        <?php if (isset($assets_images) && count($assets_images) > 0) { ?>
            <span>
                 <a href="#"><img onclick="mostrarConteudoPasta('folder-images', this)" class="icon-arrow" id="icon-arrow-img"  src="./img/arrow_right.svg"></a>
                 <img class="icon-folder" src="./img/folder.svg">
                img
            </span>
            <div id="folder-images">
                <ul>
                    <?php foreach ($assets_images as $indice => $image) { ?>
                        <li><?php echo $image ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
    </div>

</body>

</html>