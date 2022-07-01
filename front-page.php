
<?php get_header(); ?><!--llama a el archivo header.php-->
    <main id="contenido" class="row center-block cuerpoCont">
        <?php if(is_active_sidebar('contacto')){ ?>
            <div class="col-12 col-sm-5 footer-main__contacto-info">
                <?php dynamic_sidebar('bannerPrincipal'); ?>
            </div>
            <?php } else { ?> 
                <div class="bannerPrincipal">
                    <img src="wp-content/themes/tutotic/img/foto_marquesina.jpg" alt="Bienvenidos a Tutotic">
                </div>
        <?php } ?>
    </main>
<?php get_footer(); ?><!--llama a el archivo footer.php-->
