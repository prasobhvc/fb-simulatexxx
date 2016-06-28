<div class="post2_row5 comment_submitted">
    <div class="post2_row5img comment_field">
        <img src="<?php echo base_url() ?>/assets/images/postimage.png"/>
    </div>
    <div class="comment_area">
        <div class="row">
            <span class="commented_user">admin</span>
            <span class="user_comments"><?php echo $comment_posted;?></span>
        </div>
        <div class="row">
            <div class="comment_links">
                <ul>
                    <li><span>Like</span></li>
                    <li><span class="comment_reply">Reply</span></li>
                    <li><span>1</span></li>
                    <li><span class="commented_date"><?php echo date("F j").' at '.date("g.ia"); ?></span></li>
                </ul>
                <div class="reply_box">
                    <textarea></textarea>
                </div>
            </div>
        </div>
    </div>   
</div>