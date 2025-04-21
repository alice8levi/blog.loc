
<? require_once (VIEWS . '/components/header.php'); ?>


        <main class="main py-3">

            <div class="container">
                <div class="row">
                    
                     <? require (COMPONENTS.'/sidebar.php'); ?>
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
                                                <a href="posts?id=<?= $post['post_id'] ?>">
                                                    <h5 class="card-title"><?= $post['title']?></h5></a> 
                                                <p class="card-text"><?= $post['excerpt']?></p>
                                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>  
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?> 
                            <?php
                                for ($i = 1; $i <= $pages_cnt; $i++) {
                                    echo "<a href='?page={$i}'>{$i}</a> ";
                                }
                            ?>
                    </div>

    
                </div>
            </div>

        </main>

        <? require_once (VIEWS . '/components/footer.php'); ?>