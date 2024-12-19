<?php
    get_header();
?>
    <section id="body_area">
        <div class="container">
            <div class="row">
                <?php
                    get_template_part('template_part/post_setup');
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