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


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'TITLE' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/main.css">
</head>

<body>

    <div class="wrapper">
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid container">
                    <a class="navbar-brand" href="#"><b>Blog</b></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">Contacts</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="main py-3">

            <div class="container">
                <div class="row">
                     <div class="col-2">
                        <h3>Topics</h3>
                        <div class="list-group list-group-flush">
                                <!-- <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                    The current link item
                                </a> 
                                <a class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled link item</a>
                                -->                                
                                <?php foreach ($most_popular_posts as $link):?>                                       
                                        <a href="<?=$link['slug']?>" class='list-group-item list-group-item-action'><?=$link['title']?></a>
                                <?php endforeach; ?>       
                            </div>
                     </div>
                   
                    <div class="col-10">
                        <h3><?= $header ?? '' ?></h3>
                            <?php foreach ($posts as $post):?>  
                                <div class="card mb-3 post-card">
                                    <div class="row g-0">
                                        <!-- <div class="col-md-4">
                                        <img src="..." class="img-fluid rounded-start" alt="...">
                                        </div> -->
                                        <div class="col-md-12">
                                        <div class="card-body">                                
                                                <a href="<?= $post['slug']?>">
                                                    <h5 class="card-title"><?= $post['title']?></h5></a> 
                                                <p class="card-text"><?= $post['desc']?></p>
                                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>  
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?> 

                    </div>

    
                </div>
            </div>

        </main>

        <footer class="footer">
            <div class="text-bg-dark p-3 text-center">
                &copy; Copyright <?= date('Y') ?>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>