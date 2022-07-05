
<?php get_header(); ?><!--llama a el archivo header.php-->
    <main id="contenido" class="row center-block cuerpoCont">
        <!-- Seccion banner principal -->
        <?php if(is_active_sidebar('contacto')){ ?>
            <div class="col-12 col-sm-5 footer-main__contacto-info">
                <?php dynamic_sidebar('bannerPrincipal'); ?>
            </div>
            <?php } else { ?> 
                <div class="bannerPrincipal">
                    <img src="wp-content/themes/tutotic/img/foto_marquesina.jpg" alt="Bienvenidos a Tutotic">
                </div>
        <?php } ?>

        <!-- seccion 2  -->
        <?php if(is_active_sidebar('contacto')){ ?>
            <div class="col-12 col-sm-5 footer-main__contacto-info">
                <?php dynamic_sidebar('SeccionConsulta'); ?>
            </div>
            <?php } else { ?> 
                <div class="seccion-banner-consultar my-3">
                    <div style="background-color:white; width: 1920px; height: 455px;">
                        <div class="seccion-consultar d-flex">
                            <div class="img-consulta">
                            <img src="wp-content/themes/tutotic/img/consulta_master_class.jpg" alt="Consulta Tutotic" class="img-consulta_pad">

                            </div>

                            <div class="contain-text-consultar text-end">
                                <h2 class="py-4 titulo-consultar fw-bolder">¿QUÉ ES LA ESTRATEGIA REPASO ESCOLAR, TUTOTIC?</h2>
                                <p>Tutotic, refuerza tus conocimientos, es la estrategia del Ministerio TIC que tiene como objetivo de fortalecer las competencias básicas en Ciencias, Matemáticas, Lenguaje e Inglés de estudiantes de primero a once de los establecimientos educativos del país apoyados en herramientas tecnológicas</p>
                                <p>Desde el 9 de mayo podrás agendar tus tutorías y acceder al servicio gratuito que te permitirá reforzar tus conocimientos en áreas básicas. También podrás consultar las Masterclass en el canal de Youtube.</p>
                                <p class="text-primary fw-bolder">¿Qué estás esperando? Agenda, prográmate y refuerza tus conocimientos.</p>                            
                            </div>
                        </div>
                    </div>
                </div>
        <?php } ?>

        <!-- seccion agendar tutoria -->
        <?php if(is_active_sidebar('contacto')){ ?>
            <div class="col-12 col-sm-5 footer-main__contacto-info">
                <?php dynamic_sidebar('SeccionAgendar'); ?>
            </div>
            <?php } else { ?> 
                <div class="seccionAgendar d-flex"  style="margin: 0 auto">
                    <div class="div-form-agendar">
                        <div>
                            <span class="d-flex align-items-center">
                                <img src="wp-content/themes/tutotic/img/logo_tutotic.png" alt="">
                                <h2 class="">Agendar Tu Tutoria</h2>
                            </span>

                           <form action="" class="" style="padding: 0 200px;">
                           <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="email" class="form-control rounded-pill w-100" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Número de documento (*)">
                                <div id="emailHelp" class="form-text text-agendar"><strong>Ingresa el documento de identidad del estudiante para agendar la tutoria.</strong></div>
                                
                                <div class="mt-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Al hacer clic aceptas la política de tratamiento de datos.</label>
                                </div>                            
                            </div>
                            <div class="" style="padding: 0 100px;">
                            <div id="emailHelp" class="form-text text-agendar"><strong>¡Puedes Consultar haciendo click aqui!</strong></div>
                                <button type="submit" class="btn btn-pink rounded-pill">Enviar</button>
                            </div>
                           </form>
                        </div>
                    </div>
                    
                    <div class="img-agendar" style="margin: 0 auto; ">
                        <img src="wp-content/themes/tutotic/img/estudiante.png" alt="" class="img-agendar-estudiante">
                    </div>
                </div>
        <?php } ?>

        <!-- seccion número de contacto-->
        <?php if(is_active_sidebar('contacto')){ ?>
            <div class="col-12 col-sm-5 footer-main__contacto-info">
                <?php dynamic_sidebar('SeccionContacto'); ?>
            </div>
            <?php } else { ?> 
                <div class="seccionContacto d-flex my-5">
                    <img src="wp-content/themes/tutotic/img/agendar-tutoria.jpg" alt=""  style="margin: 0 auto">
                </div>
        <?php } ?>
    </main>
<?php get_footer(); ?><!--llama a el archivo footer.php-->
