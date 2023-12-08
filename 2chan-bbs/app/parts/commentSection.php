<?php

include("app/function/comment_get.php");

?>

<section>
                <!-- foreachで$comment_arrayの中身を都度$commentとしてループして取り出す -->
                <?php foreach($comment_array as $comment) :?> 
                <!-- スレッドIDとコメントのTread_idが一致するとき -->
                <?php if($thread["id"] == $comment["thread_id"]):?>

                <article>
                    <div class="wrapper">
                        <div class="name">
                            <span>名前:</span>
                            <p class="username"><?php echo $comment["username"] ?></p>
                            <time>：<?php echo $comment["post_date"] ?></time>
                        </div>
                        <p class="comment"><?php echo $comment["body"]?></p>
                    </div>
                </article>
                <?php endif;?>
                <?php endforeach ?>
</section>