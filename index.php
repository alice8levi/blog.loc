<?


?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
                                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                    The current link item
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                                <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                                <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                                <a class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled link item</a>
                            </div>
                                                </div>
                   
                    <div class="col-10">
                    <h3>Recent Posts</h3>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <!-- <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                            </div> -->
                            <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
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