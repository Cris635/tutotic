<?php get_header(); ?><!--llama a el archivo header.php-->
<aside class="col-12 p-0">
        <?php get_sidebar(); ?> <!-- llama el aside -->
</aside>
<main id="contenido" class="row center-block cuerpoCont">
    <div class="col-xxl-9 col-xl-8 col-12">
        <?php include('template/noticiasEntradas.php'); ?>
    </div>
</main>
<?php get_footer(); ?><!--llama a el archivo footer.php-->