<?php
/**
 * Template Name: Home
 *
 */
  require get_template_directory()."/data/dataHeroSection.php";


?>

<?php get_header() ?>
	<main class="">	

    <section class="l-hero">

      <!-- <aside class="aside-info">
        <p>
        (222) 2-45-96-88
        </p>
        <p>
          info@montacargas.com
        </p>
        <p>
        Lun - Sab 8:00 am - 6:30 pm
        </p>
      </aside> -->

      <!-- HERO -->
      <article class="l-container-hero">
        <h1 class="title-hero">
        <?php 
            echo $titulo
            ?>
        </h1>
        <p class="text-hero">
        <?php 
            echo $subtitulo
            ?>
        </p>

        <div class="buttons-grid">
            <buton class="btn_cotizar">
            <img class="icono-cotizar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/iconos/quill_paper.png" alt="Hero image">
            Cotizar Ahora</buton>

            <buton class="btn_servicios">
            <img class="icono-cotizar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/iconos/quill_paper.png" alt="Hero image">
            Ver servicios</buton>

          </div>
      </article>
    </section>

    
    <section class="grid-hero-info ">
      <!-- INFO HERO -->
      <article class="article-hero-info">
        <div class="items-hero-info">
          <div class="container-icono-hero-info">
            <img class="icono-items-hero-info" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/iconos/quality 1.png" alt="Hero image">
            <hr>
          </div>
          <p>
            10 años de experiencia nos respaldan
          </p>
        </div>
        <div class="items-hero-info">
          <div class="container-icono-hero-info">
            <img class="icono-items-hero-info" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/iconos/labour 1.png" alt="Hero image">
            <hr>
          </div>
          <p>
            Personal totalmente capacitado
          </p>
        </div>
        <div class="items-hero-info">
          <div class="container-icono-hero-info">
            <img class="icono-items-hero-info" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/iconos/box 1.png" alt="Hero image">
            <hr>
          </div>
          <p>
            Servicios y atención personalizada
          </p>
        </div>
      </article>
      <!-- IMAGEN HERO -->
      <div class="container-img-hero-info">
        <img class="img-hero-info" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Main-Montacargas.png" alt="Hero image">
      </div>
    </section>

    <section class="section-cinta">
      <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cinta-seguridad-salcido.png" alt="Hero image">
    </section>

    <!-- Gradiente -->
    <div class="gradiente-section">


    <!-- SERVICIOS -->
     <section class="l-servicios">
      <article class="content-info-servicios">
        <div class="content-info-text-servicios">
          <img class="adorno" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/adorno.png" alt="Hero image">
          <h2>Servicios</h1>
        </div>
        <p>
          Conoce nuestra gama de servicios profesionales para la
          industria y el sector privado. Contamos con la mejor calidad y
          los operadores mejor capacitados del mercado.
        </p>
      </article>
      <article class="content-items-servicios">
        <div>
          <div class="item-1 items-servicios">
            <div class="m-text-items-servicios">
              <h3>
                03
              </h3>
              <hr>
              <p>
                Reparación de maquinaria
              </p>
            </div>
            <div class="m-img-items-servicios">
              <img class="m-img-item-servicio" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Rectangle 46.png" alt="Hero image">
            </div>
          </div>
          <div class="item-4 items-servicios ">
            <div class="m-text-items-servicios">
              <h3>
                06
              </h3>
              <hr>
              <p>
              Capacitación
              </p>
            </div>
            <div class="m-img-items-servicios">
              <img class="m-img-item-servicio" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Rectangle 46.png" alt="Hero image">
            </div>
          </div>
        </div>
        <div>
          <div class="item-2 items-servicios">
            <div class="m-text-items-servicios">
              <h3>
                01
              </h3>
              <hr>
              <p>
              Renta de grúas y
              montacargas
              </p>
            </div>
            <div class="m-img-items-servicios">
              <img class="m-img-item-servicio" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Rectangle 46.png" alt="Hero image">
            </div>
          </div>
          <div class="item-5 items-servicios">
            <div class="m-text-items-servicios">
              <h3>
                04
              </h3>
              <hr>
              <p>
              Venta de refacciones y
              reparación
              </p>
            </div>
            <div class="m-img-items-servicios">
              <img class="m-img-item-servicio" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Rectangle 46.png" alt="Hero image">
            </div>
          </div>
        </div>
        <div>
          <div class="item-3 items-servicios">
            <div class="m-text-items-servicios">
              <h3>
                02
              </h3>
              <hr>
              <p>
              Venta de grúas y
              montacargas
              </p>
            </div>
            <div class="m-img-items-servicios">
              <img class="m-img-item-servicio" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Rectangle 46.png" alt="Hero image">
            </div>
          </div>
          <div class="item-6 items-servicios">
            <div class="m-text-items-servicios">
              <h3>
                05
              </h3>
              <hr>
              <p>
              Consultoría
              </p>
            </div>
            <div class="m-img-items-servicios">
              <img class="m-img-item-servicio" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Rectangle 46.png" alt="Hero image">
            </div>
          </div>
        </div>

      </article>
     </section>

    <!-- BANNER -->
     <section class="baner-siempre-listos">
      <img class="adorno" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/adorno.png" alt="Hero image">
                
      <div class="baner-content-info">
        <p>Siempre listos para ayudarte a lograr tus objetivos</p>
        <buton class="btn_cotizar">
          <img class="icono-cotizar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/iconos/quill_paper.png" alt="Hero image">
          Cotizar Ahora
        </buton>
      </div>
      <div class="baner-content-img">
      <img class="baner-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/forkLift.png" alt="Hero image">
      </div>
     </section>

    <!-- BANNER ABOUT -->
     <section class="l-baner-about">
        <div class="content-baner-about">
        <img class="baner-about" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Logo_v.png" alt="Hero image">
        </div>
     </section> 

     <!-- NOSOTROS -->
    <section class="l-nosotros">
      <div class="header-text">          
        <h3>
        <img class="adorno" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/adorno.png" alt="Hero image">
          Nosotros
        </h3>
        <p>
          A lo largo de 10 años hemos sido lideres en el mercado, con nuestros precios
          competitivos y servicio profesional nos hemos hecho de un lugar en las
          operaciones de translado, carga y descarga de nuestros clientes.
        </p>
      </div>
      <div class="content-img-nosotros">
      <img class="about-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-image.png" alt="Hero image">
      </div>
      <div class="content-items-nosotros">
        <div class="content-item">
            <div class="container-icono-hero-info">
              <img class="icono-items-hero-info" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/iconos/labour 1.png" alt="Hero image">
              <hr>
            </div>
            <p>
              Personal totalmente capacitado
            </p>
        </div>
        <div class="content-item">
            <div class="container-icono-hero-info">
              <img class="icono-items-hero-info" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/iconos/labour 1.png" alt="Hero image">
              <hr>
            </div>
            <p>
              Personal totalmente capacitado
            </p>
        </div>
        <div class="content-item">
            <div class="container-icono-hero-info">
              <img class="icono-items-hero-info" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/iconos/labour 1.png" alt="Hero image">
              <hr>
            </div>
            <p>
              Personal totalmente capacitado
            </p>
        </div>
      </div>
    </section>

    <section class="section-cinta">
      <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cinta-seguridad-salcido.png" alt="Hero image">
    </section>
    
    <!-- PROCESO DE CONTRATACION -->
    <section class="">
      
      <article class="l-container-proceso-contratacion">
        <div class="m-container-header-proceso-contratacion">
          <div class="m-container-text-proceso-contratacion">
          <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/adorno.png" alt="Hero image">
            <h3>Proceso de contratación</h3>
          </div>

          <div class="m-container-img-proceso-contratacion">
            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/small-montacargas.png" alt="Hero image">
          </div>
        </div>

        <div class="m-container-items-proceso-contratacion">

          <!-- ITEM 1 PROCESO DE CONTRATACION -->
          <div class="m-items-proceso-contratacion">
            <span>
              1
            </span>
            <div >
              <?php 
                get_template_part("svg/svg","insurance");
              ?>
              <p>
                Elige tu servicio
              </p>
            </div>
          </div>
          <!-- ITEM 2 PROCESO DE CONTRATACION -->
          <div class="m-items-proceso-contratacion">
            <span>
              2
            </span>
            <div >
            <?php 
              get_template_part("svg/svg","claim");
            ?>
            <p>
              Cotiza el servicio
            </p>
            </div>
          </div>
          <!-- ITEM 3 PROCESO DE CONTRATACION -->
          <div class="m-items-proceso-contratacion">
            <span>
              3
            </span>
            <div>
              <?php 
                get_template_part("svg/svg","24h");
              ?>
              <p>
                Soporte tecnico
              </p>
            </div>
          </div>
          <!-- ITEM 4 PROCESO DE CONTRATACION -->          
          <div class="m-items-proceso-contratacion">
            <span>
              4
            </span>
            <div>
            <?php 
                get_template_part("svg/svg","policy");
              ?>
              <p>
                Contatración
              </p>
            </div>
          </div>
        </div>

      </article>


      <?php 
        foreach ($proceso_contratacion as $proceso_contratacion) {
          echo '
            <article class="l-container-proceso-pasos-contratacion">
              <div class="m-proceso-contratacion">
                <div class="m-item-1">          
                <h3>
                ' 
                . $proceso_contratacion['numero_proceso'] . 
                '
                </h3>
                <hr>
                <p>
                '
                . $proceso_contratacion['titulo_proceso'] . 
                '
                </p>
                <buton class="btn_cotizar">
                  <img class="icono-cotizar" src="' . get_stylesheet_directory_uri() . '/assets/iconos/quill_paper.png" alt="Hero image">
                  Cotizar Ahora
                </buton>
              </div>
              <div class="m-item-2">
                <h3>
                  Descripción del servicio
                </h3>
                <p>
                '
                . $proceso_contratacion['descripcion_proceso'] . 
                '
                </p>
                <h3 class="m-items-2-h3">
                  ¿Qué incluye?
                </h3>
                <p>
                '
                . $proceso_contratacion['que_incluye'] . 
                '
                </p>
              </div>
            </div>
            <section class="l-proceso-contratacion-img">
            </section>  
          </article>
      
           <section class="m-division-proceso-pasos-contratacion">
              <img class="icono-cotizar" src="' . get_stylesheet_directory_uri() . '/assets/img/Group 112.png" alt="Hero image">
            </section>'
                      
        ;
        }
          ?>
    </section>


    <!-- GALERIA DE PROYECTOS -->
    <section class="l-galeria">

      <div class="header-text">          
        <h3>
        <img class="adorno" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/adorno.png" alt="Hero image">
          Galería de proyectos
        </h3>
        <p>
          Conoce algunos de los proyectos que hemos realizado, cada uno de ellos fue
          llevado a cabo con seriedad y profesionalismo dando total satisfacción a
          nuestros clientes.
        </p>
      </div>

      

      <div class="m-grid-galeria">
        <div class="m-container-img-galeria">
          <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/galeria1.png" alt="Hero image">
        </div>
        <div class="m-container-img-galeria">
          <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/galeria3.png" alt="Hero image">
        </div>
        <div class="m-container-img-galeria">
          <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/galeria4.png" alt="Hero image">
        </div>
        <div class="m-container-img-galeria"> 
          <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/galeria5.png" alt="Hero image">
        </div>
        <div class="m-container-img-galeria">
          <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/galeria7.png" alt="Hero image">
        </div>
        <div class="m-container-img-galeria">
          <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/galeria8.png" alt="Hero image">
        </div>
        <div class="m-container-img-galeria">
          <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/galeria10.png" alt="Hero image">
        </div>        
        <div class="m-container-img-galeria">
          <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/galeria11.png" alt="Hero image">
        </div>        
        <div class="m-container-img-galeria">
          <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/galeria12.png" alt="Hero image">
        </div>        
        <div class="m-container-img-galeria">
          <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/galeria13.png" alt="Hero image">
        </div>        
        <div class="m-container-img-galeria">
          <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/galeria6.png" alt="Hero image">
        </div>        
        <div class="m-container-img-galeria">
          <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/6galeria5.png" alt="Hero image">
        </div>     
      </div>
    </section>

    <!-- PREGUNTAS FRECUENTES -->
    <section class="l-preguntas">
      <div class="header-text">          
        <h3>
        <img class="adorno" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/adorno.png" alt="Hero image">
          Preguntas frecuentes
        </h3>
      </div>
      <div class="m-items-preguntas">

    <?php 
        foreach ($preguntas as $pregunta) {
          echo '
              <div class="m-item-pregunta">
                  <h4>
                      ' . $pregunta['pregunta'] . '
                  </h4>
                  <p>
                      ' . (isset($pregunta['respuesta']) ? $pregunta['respuesta'] : '') . '
                  </p>
              </div>
          ';
        }
          ?>




      </div>
    </section>

    <div class="l-gradiente-contactanos">
      <section class="l-contactanos-banner">

        <img class="m-img-cinta" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cinta-seguridad-salcido.png" alt="Hero image">

        <section class="l-contactanos">
          <div class="header-text">          
            <h3>
            <img class="adorno" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/adorno.png" alt="Hero image">
              Contactanos
            </h3>
          </div>  
          
          <div class="m-container-contactanos">
            <h4>
            Ponte en contacto con nosotros
            </h4>
            <p class="m-text-header-contactanos">
              Un asesor capacitado resolverá todas tus dudas a través de
              WhatsApp y te indicara los pasos a seguir para poder
              empezar con tu proyecto
            </p>
            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/contactanos-cta.jpg" alt="Hero image">
            <buton class="btn_cotizar">
            <img class="icono-cotizar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/iconos/quill_paper.png" alt="Hero image">
            Quiero hablar con un asesor</buton>
            <p class="m-o">ó</p>
            <p class="m-text-contacto-asesor">Puedes usar alguno de estos medios para
            ponerte en contacto con nosotros:</p>
            <div class="m-container-items-contacto">
              <div class="m-item-contacto">
              <?php 

                echo $correo
              ?>
              </div>
              <div class="m-item-contacto">
              <?php 

                echo $telefono
              ?>
              </div>
            </div>
          </div>

          <div class="m-footer-logo">
            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Logo_v.png" alt="Hero image">
          </div>

        </section>

      </section>

    </div>

    
    </div>




    </main>
<?php get_footer() ?>