<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'TITLE' ?></title>
   <base href="<?= PATH?>/">   <!-- присоединяет все относительные ссылки к этому адресу -->
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
                                <a class="nav-link" href="contacts">Contacts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="posts/create">Create Post</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <?php getAlerts(); ?>