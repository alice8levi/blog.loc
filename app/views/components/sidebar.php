<?php 
global $db;
$most_popular_posts = $db->query("SELECT * FROM posts ORDER BY post_id DESC LIMIT 5")->findAll();     
?>
            
            <div class="col-2">
                        <h3>Topics</h3>
                        <div class="list-group list-group-flush">
                                <!-- <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                    The current link item
                                </a> 
                                <a class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled link item</a>
                                -->                                
                                <?php foreach ($most_popular_posts as $link):?>                                       
                                        <a href="posts?id=<?= $link['post_id'] ?>" class='list-group-item list-group-item-action'><?=$link['title']?></a>
                                <?php endforeach; ?>       
                            </div>
                     </div>