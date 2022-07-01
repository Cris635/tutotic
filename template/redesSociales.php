<div id="titulFooterRedes">
	<p class="swing"><i>Síguenos en Nuestrar Redes Sociales</i></p>
</div>

<div id="contenFooterRedes" class="row">

	<div id="twiter" class="col-l-4 col-md-4 col-sm-4 col-xs-12">

		<?php if ( is_active_sidebar( 'twiter' ) ) : ?>

					<?php dynamic_sidebar( 'twiter' ); ?>

		<?php else : ?>
 
		<a class="twitter-timeline" data-height="200" data-theme="light" data-link-color="#2B7BB9" href="https://twitter.com/UTPereira?ref_src=twsrc%5Etfw">Tweets by UTPereira</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 

		<?php endif ?>

	</div>

	<div id="facebook" class="col-l-4 col-md-4 col-sm-4 col-xs-12">

		<?php if ( is_active_sidebar( 'facebook' ) ) : ?>

			<?php dynamic_sidebar( 'facebook' ); ?>

		<?php else : ?>

			<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Futpereira&tabs=timeline&width=300&height=205&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="300" height="205" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

		<?php endif ?>

	</div>

	<div id="instagram" class="col-l-4 col-md-4 col-sm-4 col-xs-12 animation-target">

		<?php if ( is_active_sidebar( 'instagram' ) ) : ?>

			<?php dynamic_sidebar( 'instagram' ); ?>

		<?php else : ?>

			<!-- InstaWidget -->
			<a href="https://instawidget.net/v/user/utpereira" id="link-a42a11e4aadf40c5f9ea5e4e61042a43fc174617e103b9df86434ebba5d1bf1e">@utpereira</a>
			<script src="https://instawidget.net/js/instawidget.js?u=a42a11e4aadf40c5f9ea5e4e61042a43fc174617e103b9df86434ebba5d1bf1e&width=100%"></script>

		<?php endif ?>
	</div>

</div>