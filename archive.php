
<?php
    get_header();
?>
    <section id="body_area">
        <div class="archive-header">
            <?php
                if (is_category()) {
                    echo '<h1>Category: ' . single_cat_title('', false) . '</h1>';
                } elseif (is_tag()) {
                    echo '<h1>Tag: ' . single_tag_title('', false) . '</h1>';
                } elseif (is_author()) {
                    echo '<h1>Author: ' . get_the_author() . '</h1>';
                } elseif (is_date()) {
                    if (is_year()) {
                        echo '<h1>Year: ' . get_the_date('Y') . '</h1>';
                    } elseif (is_month()) {
                        echo '<h1>Month: ' . get_the_date('F Y') . '</h1>';
                    } elseif (is_day()) {
                        echo '<h1>Day: ' . get_the_date('F j, Y') . '</h1>';
                    }
                } else {
                    echo '<h1>Archives</h1>';
                }
            ?>
        </div>
        <div class="container">
            <div class="row">
                <?php
                    get_template_part('template_part/blog_setup');
                ?>

                <div class="col-md-3">
                    <?php
                        get_sidebar('main')
                    ?>
                </div>
            </div>
        </div>
    </section>

<?php
    get_footer();
?>