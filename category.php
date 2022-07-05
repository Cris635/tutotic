<?php get_header(); ?>
<!--llama a el archivo header.php-->

<aside class="col-12 p-0">
    <?php get_sidebar(); ?> <!-- llama el aside -->
</aside>
<main id="contenido" class="row center-block cuerpoCont">    

    <article class="col-12">
        <div class="titulocategoria ">
            <h2><?php single_cat_title(); ?></h2>
        </div>  
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article class="row my-5 justify-content-between contenido-noticias">
                    <div class="col-lg-4 px-0 contenido-noticias__imagen">

                        <div class="imagen-post">
                            <?php $thumb_id = get_post_thumbnail_id();
                            if ($thumb_id != 0) { ?>

                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a><!-- funcion que permite agregar imagenes destacadas en el contenido de los post-->

                            <?php } else { ?>

                                <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/imgPorDefecto.png" title="Universidad Tecnológica de Pereira"></a>

                            <?php } ?>
                        </div>
                    </div>

                    <!-- text container  -->
                    <div class="col-lg-8 row align-content-between py-2">
                        <div class="container-titles">
                            <div class="col-12 post-title-new">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <!--titulo de los post-->
                                </h3>
                            </div>
                            <div>
                                <p class="subtitle-category text-center"><?php the_category(','); ?></p>
                                <!--fecha, hora y categoria de los post-->
                            </div>
                        </div>
                        <div class="col-12 post-content">
                            <?php the_excerpt(); ?>
                            <!--contenido del post con un limite de caracteres-->
                            <div class="col-12 publicacion">
                                <p>
                                    <a class="mb-1" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" aria-label="Ampliar información noticia <?php the_title(); ?>"><?php _e('Ampliar Información - ')?><?php the_title(); ?></a>
                                    <div>
                                        <?php _e('Fecha Publicación: '); ?><!--fecha de la publicación-->
                                        <?php the_time(get_option('date_format') ); ?> &bull; <?php the_time(get_option('time') ); ?>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endwhile;
        else : ?>
            <!--cierre del while de wordpress -->

            <!-- si no encuentra nada en los post anterio, muestra la linea de codigo siguiente -->
            <h1><?php _e('No se encontro lo que está buscando, por favor realice una nueva busqueda!') ?></h1><!-- e_()=>funcion de wordpres que traduce al idioma que este configurado wordpress-->

            <?php get_search_form(); ?>

        <?php endif ?>
        <!--cierre del if del loop de wordpress-->
    </article>
    <div class="row justify-content-center paginacion">
        <?php echo paginate_links($args); ?>
        <!-- función que muestra la páginación de las entradas -->
    </div>
</main>


<?php get_footer(); ?>
<!--llama a el archivo footer.php-->