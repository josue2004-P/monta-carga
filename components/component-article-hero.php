<?php
  // LLAMAR DATOS EN OTRO ARCHIVO
  require get_template_directory()."/data/dataHeroSection.php";
?>


<article class="article-hero">
          <h1>
            <?php 
            echo $titulo
            ?>
          </h1>
          <p>
          <?php 
            echo $subtitulo
            ?>
          </p>
          <div class="buttons-grid">
            <buton class="btn_primary">Buy the book</buton>
            <buton class="btn_dark">Free preview</buton>
          </div>

          <?php 
          get_template_part("components/component","start-container");
          ?>
</article>