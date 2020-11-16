<?php

require('vendor/autoload.php');

use \Goose\Client as GooseClient;

$goose = new GooseClient();
$article = $goose->extractContent('https://github.com/5baddi/php-goose-with-guzzlehttp7');
var_dump($article->getTitle());

$title = $article->getTitle();
$metaDescription = $article->getMetaDescription();
$metaKeywords = $article->getMetaKeywords();
$canonicalLink = $article->getCanonicalLink();
$domain = $article->getDomain();
$tags = $article->getTags();
$links = $article->getLinks();
$videos = $article->getVideos();
$articleText = $article->getCleanedArticleText();
$entities = $article->getPopularWords();
$image = $article->getTopImage();
$allImages = $article->getAllImages();