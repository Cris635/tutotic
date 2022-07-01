<div class="sidebarH py-4">
	
	<aside class="my-4" id="breadcrumbs">
		<?php the_breadcrumb(); ?><!-- llama a los breadcrumbs-->
		<hr>
	</aside>

	<div class="infoRegistro">
		<div class="d-none d-lg-block menuLateral">
			<?php wp_nav_menu(array(
				'theme_location' => 'menu4',
				'container' => false,
				'items_wrap' => '<ul class="nav accordion menu_lateral">%3$s</ul>',
				'add_li_class' => 'col-2 menu-lateral-item accordion mx-2 mt-1'));
			?>
		</div>

		<div class="menuLateralRespon d-lg-none">
			<button class="btn" style="background-color:var(--institucional);" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-label="Menu Inferior" aria-controls="offcanvasRight"><i class="bi-layout-text-window text-white"></i></i></button>
		</div>
		<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
			<div class="offcanvas-header">
				<h2 id="offcanvasRightLabel">UTP</h5>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
		
			<div class="offcanvas-body">
				<?php wp_nav_menu(array(
					'theme_location' => 'menu4',
					'container' => false,
					'items_wrap' => '<ul class="accordion menu_lateral">%3$s</ul>',
					'add_li_class' => 'menu-lateral-item accordion-item'
				)); ?>
			</div>
		</div>
	</div>
</div>