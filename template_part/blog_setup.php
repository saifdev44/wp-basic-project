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
                    <?php the_excerpt()?>
                </div>
            </div>
            <?php
            endwhile;

            // "Page X of Y" Display
            global $wp_query;
            $current_page = max(1, get_query_var('paged'));
            $total_pages = $wp_query->max_num_pages;

            if ($total_pages > 1) {
                echo '<div class="page-count">';
                echo 'Page ' . $current_page . ' of ' . $total_pages;
                echo '</div>';
            }

            // Pagination Links
            echo '<div class="pagination">';
            echo paginate_links(array(
                'mid_size' => 2,
                'prev_text' => '« Previous',
                'next_text' => 'Next »',
            ));
            echo '</div>';

        else:
            _e('No post found');
        endif
    ?>

    
</div>