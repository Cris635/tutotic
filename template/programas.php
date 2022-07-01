<div class="row justify-content-around tam-facultad">
	<div class="titulonoti"> 
		<h2><?php _e('Programas académicos'); ?></h2>
	</div>

    <?php $the_query = new WP_Query( 'category_name=facultad&o&posts_per_page=10' ); ?>

    <!-- muestra las 10 facultades -->
	<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>               

			<div class="col-xxl-4 col-lg-6 col-12 mb-4">

				<div class="card-img-top imagen-post">
					<?php $thumb_id = get_post_thumbnail_id(); 
					if ($thumb_id != 0) { ?>

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a><!-- funcion que permite agregar imagenes destacadas en el contenido de los post-->

					<?php } else { ?>

						<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory');?>/img/imgPorDefecto.png" title="Universidad Tecnológica de Pereira"></a>

					<?php } ?>

				</div>

				<div class="row">
					<div class="middle-up col-lg-6 col-md-6 col-sm-6 col-6">
                        <a type="button" class="btn center-block enlace-boton facultad-<?php the_id(); ?>" href="/facultad/artes">Ver Pregrados</a>
                    </div>

					<div class="middle-down col-lg-6 col-md-6 col-sm-6 col-6">
						<a type="button" class="btn center-block enlace-boton facultad-<?php the_id(); ?>" href="/facultad/artes/posgrados">Ver Posgrados</a>
					</div>
				</div>

				<div class="post-title card-title facultad-<?php the_id(); ?>">
					<a href="<?php the_permalink(); ?>">Faculdad de <?php the_title(); ?> (+)</a><!--titulo de los post-->
				</div>

			</div>
	<?php endwhile;?>

</div>