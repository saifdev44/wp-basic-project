<footer id="footer_area">
        <section id="copyright_area">
            <div class="container">
                <div class="row">
                <?php for ($i = 1; $i <= 3; $i++) : ?>
                    <?php if (is_active_sidebar("footer-widget-area-$i")) : ?>
                    <div class="col-md-3">
                        <?php dynamic_sidebar("footer-widget-area-$i"); ?>
                    </div>
                    <?php endif; ?>
                <?php endfor; ?>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <p><?php echo get_theme_mod('saifad_copyright_section'); ?></p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    
    <?php wp_footer() ?>
</body>
</html>