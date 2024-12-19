<div class="col-md-9">
    <?php
        if(have_posts()):
            while(have_posts()): the_post();
    ?>
            <div class="blog_area">
                <div class="post_thumb">
                    <?php
                        echo the_post_thumbnail('post_thumbnails');
                    ?>
                </div>
                <div class="post_details">
                    <div class="post_title">
                        <h2 class="post_title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                    </div>
                    <?php the_content()?>
                </div>
            </div>
            <?php
            endwhile;

            else:
                _e('No post found');
        endif
    ?>
</div>