</div><!-- container -->
<footer class="site-footer">
    <nav class="site-nav">
        <?php
        $args = array(
            'theme_location' => 'footer'
        ); ?>
        <?php wp_nav_menu(); ?>
    </nav>
    <p><div class="copyrights"><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></div></p>

</footer>

<?php wp_footer(); ?>
</body>
</html>