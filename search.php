
<?php
    get_header();
?>
    <section id="body_area">
        <div class="container">
            <div class="row">
                <!-- Search Query Title -->
                <header class="search-header">
                    <?php if (have_posts()) : ?>
                        <h1>Search Results for: <?php echo get_search_query(); ?></h1>
                    <?php else : ?>
                        <h1>No Results Found for: <?php echo get_search_query(); ?></h1>
                    <?php endif; ?>
                </header>
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