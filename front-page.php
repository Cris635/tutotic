
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
                <div class="seccion-consultar d-flex">
                    <div class="img-consulta">
                        <img src="wp-content/themes/tutotic/img/consulta_clase.png" alt="Consulta Tutotic" class="img-consulta_pad">
                    </div>
                    <div class="contain-text-consultar text-end">
                        <h2 class="titulo-consulta">¿QUÉ ES LA ESTRATEGIA <br>DE REPASO ESCOLAR, <br>TUTOTIC?</h2>
                        <div class="mb-5">
                            <p>Tutotic, refuerza tus conocimientos, es la estrategia del Ministerio TIC que tiene como objetivo de fortalecer las competencias básicas en Ciencias, Matemáticas, Lenguaje e Inglés de estudiantes de primero a once de los establecimientos educativos del país apoyados en herramientas tecnológicas</p>
                            <p>Desde el 9 de mayo podrás agendar tus tutorías y acceder al servicio gratuito que te permitirá reforzar tus conocimientos en áreas básicas. También podrás consultar las Masterclass en el canal de Youtube.</p>
                        </div>
                        <p class="info-consulta">¿Qué estás esperando?<br>Agenda, prográmate y refuerza tus conocimientos.</p>                            
                    </div>
                </div>
        <?php } ?>

        <!-- seccion agendar tutoria -->
        <?php if(is_active_sidebar('contacto')){ ?>
            <div class="col-12 col-sm-5 footer-main__contacto-info">
                <?php dynamic_sidebar('SeccionAgendar'); ?>
            </div>
            <?php } else { ?> 
                <div class="seccionAgendar my-5">
                    <span>
                        <img src="wp-content/themes/tutotic/img/agenda_tutoria.png" alt="Agendar Tutoría">
                    </span>
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"></label>
                            <input type="email" class="form-control rounded-pill w-100" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Número de documento (*)">
                            <div id="emailHelp" class="form-text text-agendar"><strong>Ingresa el documento de identidad del estudiante para agendar la tutoria.</strong></div>
                            
                            <div class="mt-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Al hacer clic aceptas la política de tratamiento de datos.</label>
                            </div>                            
                        </div>
                        <div id="emailHelp" class="form-text text-agendar"><strong>¡Puedes Consultar haciendo click aqui!</strong></div>
                            <button type="submit" class="btn btn-pink rounded-pill">Enviar</button>
                        </div>
                    </form>
                </div>
        <?php } ?>

        <!-- seccion número de contacto-->
        <?php if(is_active_sidebar('contacto')){ ?>
            <div class="col-12 col-sm-5 footer-main__contacto-info">
                <?php dynamic_sidebar('SeccionContacto'); ?>
            </div>
            <?php } else { ?> 
                <div class="seccionContacto">
                    <h2 class="mt-4">NÚMEROS DE CONTACTO</h2>
                    <div class="informacionContacto">
                        <div class="lineaNacional mb-4">01 8000 931 023 - 01 8000 931 024</div>
                        <div class="mb-4 d-flex">
                            <p class="lineaNacional"><img class="logoWhatsapp" src="wp-content/themes/tutotic/img/whatsapp-logo.png" alt="Agendar Tutoría"> 316 025 9256</p>
                            <p class="lineaNacional"><img class="logoWhatsapp" src="wp-content/themes/tutotic/img/whatsapp-logo.png" alt="Agendar Tutoría"> 316 027 3587</p>
                        </div>
                        <div class="mb-4 d-flex">
                            <p class="lineaNacional"><img class="logoWhatsapp" src="wp-content/themes/tutotic/img/whatsapp-logo.png" alt="Agendar Tutoría"> 324 211 2015</p>
                            <p class="lineaNacional"><img class="logoWhatsapp" src="wp-content/themes/tutotic/img/whatsapp-logo.png" alt="Agendar Tutoría"> 316 024 2412</p>
                        </div>
                    </div>
                </div>
        <?php } ?>
    </main>
<?php get_footer(); ?><!--llama a el archivo footer.php-->
