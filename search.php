<?php

function getLinksPages($document, $url){

    $pages = [];

    if ($links = $document->getElementsByTagName('a')) {
        foreach ($links as $node) {    
            $link_href = $node->getAttribute('href');
            $pages [] = $link_href;
        }
    }

    return $pages;
}

function getLinksCss($document, $url){

    $assets_css = [];

    if ($links = $document->getElementsByTagName('link')) {

        foreach ($links as $node) {
    
            $atributo_rel = $node->getAttribute('rel');
    
            if ($atributo_rel == "stylesheet") {
                $link_css = $node->getAttribute('href');
                $assets_css [] = $link_css;
            }
        }
    }

    return $assets_css;
}

function getLinksJs($document, $url){

    $assets_js = [];

    if ($links = $document->getElementsByTagName('script')) {
        foreach ($links as $node) {
            $link_js = $node->getAttribute('src');
            $assets_js [] = $link_js;
        }
    }

    return $assets_js;
}

function getLinksImages($document, $url){

    $assest_images = [];

    if ($links = $document->getElementsByTagName('img')) {
        foreach ($links as $node) {
            $link_img = $node->getAttribute('src');
            $assest_images[] = $link_img;
        }
    }

    return $assest_images;
}

?>