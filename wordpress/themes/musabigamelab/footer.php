    </main>
    <footer class="site-footer">
        <div class="page-top">
            <div id="arrow-up" class="arrow-up">
                <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-up.svg" alt="Page Top">
                </a>
            </div>
        </div>
        <ul class="icon-list">
            <li class="icon"><a href="https://x.com/MusabiGameLab"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-x.svg" alt="X"></a></li>
            <li class="icon"><a href="https://instagram.com/musabigamelab"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-instagram.svg" alt="Instagram"></a></li>
            <li class="icon"><a href="https://youtube.com/@musabigamelab"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-youtube.svg" alt="YouTube"></a></li>
            <li class="icon"><a href="<?php echo esc_url(home_url('contact')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-mail.svg" alt="メール"></a></li>
        </ul>
        <p class="copyright">&copy; 2024 <?php bloginfo('name'); ?></p>
    </footer>
<?php wp_footer(); ?>
</body>
</html>
