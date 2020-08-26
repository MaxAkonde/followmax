<div class="container">
    <header class="content-header">
        <div class="meta mb-3">
            <span class="date"><?php the_date(); ?></span>
            <?php
            the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
            ?>
            <span class="tag"><i class='fa fa-tag'></i> category</span>
            <span class="comment">
                <a href="#comments"><i class='fa fa-comment'></i> <?php comments_number(); ?></a>
            </span>
        </div>
    </header>

    <div class="content-body">
        <figure class="blog-banner">
            <a href="#"><img class="img-fluid" src="<?php the_post_thumbnail_url('post-large'); ?>" alt="image"></a>
        </figure>
        <?php
        the_content();
        ?>
    </div>
    <?php
    comments_template();
    ?>
</div>