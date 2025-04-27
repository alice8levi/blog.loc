
<? require_once (VIEWS . '/components/header.php'); ?>


        <main class="main py-3">

            <div class="container">
                <div class="row">
                    
                     <? require_once (COMPONENTS.'/sidebar.php'); ?>
                    <div class="col-10">
                        <h1><?= $post['title'] ?></h1>
                        <p><?= $post['content'] ?></p>
                        <div id="rate-container" class="row col-3">                            
                            <button id="up_btn" class="btn btn-link col" data-post-id="<?= $post['post_id'] ?>">Up</button>      
                            <p id="rate_p" class="col" ><?= isset($post['rate']) ? $post['rate'] : "0" ?></p>
                            <button id="down_btn" class="btn btn-link col" data-post-id="<?= $post['post_id'] ?>">Down</button>    
                        </div>
                        <div class="row col-3">
                            <form class="col" action="/posts/edit" method="GET">
                                <input type="hidden" name="id" value="<?= $post['post_id'] ?>">
                                <button type="submit" class="btn btn-link">Edit</button>
                            </form>
                            <form class="col"  action="/posts" method="POST">
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="id" value="<?= $post['post_id'] ?>">
                                <button type="submit" class="btn btn-link">Delete</button>
                            </form>
                        </div>
                    </div>

    
                </div>

            </div>

        </main>

        <? require_once (VIEWS . '/components/footer.php'); ?>