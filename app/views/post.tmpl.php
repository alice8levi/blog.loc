
<? require_once (VIEWS . '/components/header.php'); ?>


        <main class="main py-3">

            <div class="container">
                <div class="row">
                    
                     <? require_once ('components/sidebar.php'); ?>
                    <div class="col-10">
                    <h1><?= $post['title'] ?></h1>
                          <p><?= $post['content'] ?></p>

                    </div>

    
                </div>
            </div>

        </main>

        <? require_once (VIEWS . '/components/footer.php'); ?>