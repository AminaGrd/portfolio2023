<?php $page = get_the_ID();
            if($page === 85) {
            get_template_part( 'template-parts/site-web' );?>
        <?php }; ?>
        <?php $page = get_the_ID();
            if($page === 89) {
            get_template_part( 'template-parts/maquette' );?>
        <?php }; ?>
        <?php $page = get_the_ID();
            if($page === 87) {
            get_template_part( 'template-parts/illustration' );?>
        <?php }; ?>
    </div><!-- fin div.content -->
    <footer>
        <div class="footer__contact">
            <a href="mailto:amina.giraud@gmail.com"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/footer/ico-mail.svg" alt="icône mail"></a>
            <a href="tel:0658195213"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/footer/ico-phone.svg" alt="icône téléphone"></a>

        </div>
    </footer>
    <script src="<?php bloginfo('template_directory'); ?>/assets/scripts/nav.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/scripts/btn-presentation.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/scripts/slide-show.js"></script>
</body>
</html>