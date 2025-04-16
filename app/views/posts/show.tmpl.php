
<? require_once (VIEWS . '/components/header.php'); ?>


        <main class="main py-3">

            <div class="container">
                <div class="row">
                    
                     <? require_once (COMPONENTS.'/sidebar.php'); ?>
                    <div class="col-10">
                    <h1><?= $post['title'] ?></h1>
                          <p><?= $post['content'] ?></p>

                    </div>

    
                </div>
                <form action="/posts" method="post">
                     <input type="hidden" name="_method" value="delete">
                     <input type="hidden" name="id" value="<?= $post['post_id'] ?>">
                     <button type="submit" class="btn btn-link">Delete</button>
                 </form>
            </div>

        </main>

        <? require_once (VIEWS . '/components/footer.php'); ?>