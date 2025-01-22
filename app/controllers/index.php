<?php

$title = 'Blog Home';
$header = "Recent Posts" ;
$posts = [
    1 => [
        'title' => 'Title 1',
        'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'title-1',
    ],
    2 => [
        'title' => 'Title 2',
        'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'title-2',
    ],
    3 => [
        'title' => 'Title 3',
        'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'title-3',
    ],
    4 => [
        'title' => 'Title 4',
        'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'title-4',
    ],
    5 => [
        'title' => 'Title 5',
        'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
        'slug' => 'title-5',
    ],
];

$most_popular_posts = [
    1 => [
        'title' => 'An item',
        'slug' => "item 4",
    ],
    2 => [
        'title' => 'A second item',
        'slug' => "item 4",
    ],
    3 => [
        'title' => 'A third item',
        'slug' => "item 4",
    ],
    4 => [
        'title' => 'A fourth item',
        'slug' => "item 4",
    ],
   
];

require_once VIEWS . '/index.tmpl.php';