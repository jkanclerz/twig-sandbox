<?php

require_once 'vendor/autoload.php';

use Jkanclerz\Component\Feed\Repository\FeedRepository;
use \Twig_Loader_Filesystem;
use \Twig_Environment;

$loader = new Twig_Loader_Filesystem('src/Resources/views');
$twig = new Twig_Environment($loader);

$jsonPath = __DIR__.'/var/feed.json';

$repo = new FeedRepository($jsonPath);

echo $twig->render(
	'feeds.html.twig',
	array(
		'name' => 'Jakub Kanclerz',
		'feeds' => $repo->findAll(),
	)
);
