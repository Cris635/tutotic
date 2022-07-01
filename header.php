<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
	<title> <?php wp_title(''); ?> </title>

	<?php include('template/SaltarContenido.php') ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class('anchoSitio'); ?> id="inicio">
	<header id="header">
		<nav class="cabecera">
			<div class="logos">
				<div class="menuGovco">
					<div class="header-govco">
						<a href="https://www.gov.co/" target="blank" title="Ir al portal GOV.CO">
						<img src="wp-content/themes/tutotic/img/header_govco.png" alt="Imagen logo GovCo" class="img-fluid">
						</a>
					</div>
				</div>

				<div class="logosMintic">
						<a href="https://www.mintic.gov.co/portal/inicio/" target="_blank" title="Ir al Inicio del portal MInTIC">
							<img src="wp-content/themes/tutotic/img/logo_MinTIC.png" alt="Imagen logo mintic" class="" aria-hidden="true" width="300px">
						</a>
						<img src="wp-content/themes/tutotic/img/logo_tutotic.png" alt="Imagen logo Tutotic" class="aria-hidden_true" width="200px">
				</div>
			</div>

			<div class="menuPrincipal">
				<?php wp_nav_menu(array(
					'theme_location' => 'menu1',
					'container' => false,
					'items_wrap' => '<ul class="nav">%3$s</ul>',
					'add_a_class' => 'nav-link'
				));
				?>
			</div>
		</nav>
	</header>