		<footer></footer>
	</div><!-- #page wrapper -->
	<?php wp_footer(); ?>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        breakpoints: {
          640: {
            slidesPerView: 2, // Muestra 1 slide
            spaceBetween: 20, // Espacio entre slides
          },
          1024: {
            slidesPerView: 3, // Muestra 1 slide
            spaceBetween: 20, // Espacio entre slides
          },
        },
        slidesPerView: 1,
        centeredSlides: true,
        initialSlide: 1,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
      });
    </script>
	</body>
</html>	